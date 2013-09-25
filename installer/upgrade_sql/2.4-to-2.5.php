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

if (!defined('IN_COMMENTICS')) { die('Access Denied.'); }

mysql_query("UPDATE `" . $cmtx_mysql_table_prefix . "settings` SET `value` = '2000' WHERE `title` = 'scroll_speed'");

mysql_query("ALTER TABLE `" . $cmtx_mysql_table_prefix . "subscribers` ADD `ip_address` varchar(250) NOT NULL default ''");

mysql_query("DELETE FROM `" . $cmtx_mysql_table_prefix . "settings` WHERE `title` = 'js_vote_ok'");

mysql_query("UPDATE `" . $cmtx_mysql_table_prefix . "settings` SET `title` = 'enabled_bb_code_link' WHERE `title` = 'enabled_bb_code_url'");
mysql_query("UPDATE `" . $cmtx_mysql_table_prefix . "settings` SET `title` = 'enabled_bb_code_php' WHERE `title` = 'enabled_bb_code_php_code'");
mysql_query("UPDATE `" . $cmtx_mysql_table_prefix . "settings` SET `title` = 'enabled_bb_code_numeric' WHERE `title` = 'enabled_bb_code_list_numeric'");
mysql_query("UPDATE `" . $cmtx_mysql_table_prefix . "settings` SET `title` = 'enabled_bb_code_bullet' WHERE `title` = 'enabled_bb_code_list_bullet'");

mysql_query("UPDATE `" . $cmtx_mysql_table_prefix . "settings` SET `value` = '1' WHERE `title` = 'validate_website_ping'");

mysql_query("CREATE TABLE IF NOT EXISTS `" . $cmtx_mysql_table_prefix . "ratings` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `page_id` int(10) unsigned NOT NULL default '0',
  `rating` tinyint(1) unsigned NOT NULL default '0',
  `ip_address` varchar(250) NOT NULL default '',
  `dated` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;");

if (mysql_errno()) {
echo mysql_errno() . ': ' . mysql_error() . '<br />';
$error = true;
}

?>