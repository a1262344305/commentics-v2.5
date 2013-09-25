<?php
/*
Copyright © 2009-2013 Commentics Development Team [commentics.org]
License: GNU General Public License v3.0
		 http://www.commentics.org/license/

This file is part of Commentics.

Commentics is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Commentics is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Commentics. If not, see <http://www.gnu.org/licenses/>.

Text to help preserve UTF-8 file encoding: 汉语漢語.
*/

define('IN_COMMENTICS', true);

//set the path
$cmtx_path = '';

/* Database Connection */
require 'includes/db/connect.php'; //connect to database
if (!$cmtx_db_ok) { die(); }

//load functions file
require 'includes/functions/page.php';

//load language file
require 'includes/language/' . cmtx_setting('language_frontend') . '/comments.php';

if (!cmtx_setting('show_average_rating')) {
	die();
}

if (!cmtx_is_administrator()) { //if not administrator
	if (cmtx_in_maintenance()) { //check if under maintenance
		die();
	}
}

/* Error Reporting */
cmtx_error_reporting('includes/logs/errors.log');

/* Time Zone */
cmtx_set_time_zone(cmtx_setting('time_zone'));

$ip_address = cmtx_get_ip_address(); //get user's IP address

if (isset($_POST['id']) && isset($_POST['rating'])) {

	$id = $_POST['id'];
	if (!ctype_digit($id)) { die(); }
	$id = cmtx_sanitize($id, true, true);
	
	$rating = $_POST['rating'];
	if (!ctype_digit($rating)) { die(); }
	$rating = cmtx_sanitize($rating, true, true);
	
	//check if page exists
	$query = mysql_query("SELECT * FROM `" . $cmtx_mysql_table_prefix . "pages` WHERE `id` = '$id'");
	$count = mysql_num_rows($query);
	if ($count == 0) {
		echo CMTX_RATE_NO_PAGE;
		return;
	}
	
	//check if user has already rated as a poster
	$query = mysql_query("SELECT * FROM `" . $cmtx_mysql_table_prefix . "comments` WHERE `page_id` = '$id' AND `ip_address` = '$ip_address' AND `rating` != '0'");
	$count = mysql_num_rows($query);
	if ($count > 0) {
		echo CMTX_RATE_ALREADY_RATED;
		return;
	}
	
	//check if user has already rated as a guest
	$query = mysql_query("SELECT * FROM `" . $cmtx_mysql_table_prefix . "ratings` WHERE `page_id` = '$id' and `ip_address` = '$ip_address'");
	$count = mysql_num_rows($query);
	if ($count > 0) {
		echo CMTX_RATE_ALREADY_RATED;
		return;
	}
	
	//check if user is banned
	$query = mysql_query("SELECT * FROM `" . $cmtx_mysql_table_prefix . "bans` WHERE `ip_address` = '$ip_address'");
	$count = mysql_num_rows($query);
	if ($count > 0) {
		echo CMTX_RATE_BANNED;
		return;
	}

	mysql_query("INSERT INTO `" . $cmtx_mysql_table_prefix . "ratings` (`page_id`, `rating`, `ip_address`, `dated`) values ('$id', '$rating', '$ip_address', NOW())");
	
	$result = mysql_query("SELECT AVG(`rating`) 
	FROM ( 
	SELECT `rating` FROM `" . $cmtx_mysql_table_prefix . "comments` WHERE `is_approved` = '1' AND `rating` != '0' AND `page_id` = '$id' 
	UNION ALL 
	SELECT `rating` FROM `" . $cmtx_mysql_table_prefix . "ratings` WHERE `page_id` = '$id' 
	) 
	AS `average`
	");
	
	$average = mysql_fetch_assoc($result);
	$average = $average["AVG(`rating`)"];
	
	$average = round($average, 0);
	
	echo $average;

}
?>