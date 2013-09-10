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
?>

<div class='page_help_block'>
<a class='page_help_text' href="http://www.commentics.org/wiki/doku.php?id=admin:<?php echo $_GET['page']; ?>" target="_blank"><?php echo CMTX_LINK_HELP; ?></a>
</div>

<h3><?php echo CMTX_TITLE_LAYOUT_ORDER; ?></h3>
<hr class="title"/>

<?php
if (isset($_POST['submit']) && cmtx_setting('is_demo')) {
?>
<div class="warning"><?php echo CMTX_MSG_DEMO; ?></div>
<div style="clear: left;"></div>
<?php
} else if (isset($_POST['submit'])) {

cmtx_check_csrf_form_key();

$sort_order_parts = $_POST['sort_order_parts'];
if (isset($_POST['split_screen'])) { $split_screen = 1; } else { $split_screen = 0; }

$sort_order_parts_san = cmtx_sanitize($sort_order_parts);

mysql_query("UPDATE `" . $cmtx_mysql_table_prefix . "settings` SET `value` = '$sort_order_parts_san' WHERE `title` = 'sort_order_parts'");
mysql_query("UPDATE `" . $cmtx_mysql_table_prefix . "settings` SET `value` = '$split_screen' WHERE `title` = 'split_screen'");
?>
<div class="success"><?php echo CMTX_MSG_SAVED; ?></div>
<div style="clear: left;"></div>
<?php } ?>

<p />

<?php echo CMTX_DESC_LAYOUT_ORDER_1 ?>

<p />

<script type="text/javascript">
// <![CDATA[
$(document).ready(function() {
	$('#parts').sortable({
		update: function() {
			var newOrder = $(this).sortable('toArray').toString();
			newOrder = newOrder.replace(/part_/g, '');
			$('#sort_order_parts').val(newOrder);
		}
	});
});
// ]]>
</script>

<form name="layout_order" id="layout_order" action="index.php?page=layout_order" method="post">

<div id="parts" class="sortable">

	<?php
	$elements = explode(',', cmtx_setting('sort_order_parts'));
	foreach ($elements as $element) {
		switch ($element) {
			case '1':
			output_comments();
			break;
			case '2':
			output_form();
			break;
		}
	}
	?>
	
	<?php function output_comments() { ?> <div id="part_1" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo CMTX_FIELD_VALUE_COMMENTS; ?></div> <?php } ?>
    <?php function output_form() { ?> <div id="part_2" class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><?php echo CMTX_FIELD_VALUE_FORM; ?></div> <?php } ?>
	
</div>

<input type="hidden" name="sort_order_parts" id="sort_order_parts" value="<?php echo cmtx_setting('sort_order_parts'); ?>"/>

<p />

<?php echo CMTX_DESC_LAYOUT_ORDER_2 ?>

<p />

<label class='layout_order'><?php echo CMTX_FIELD_LABEL_SPLIT_SCREEN; ?></label> <?php if (cmtx_setting('split_screen')) { ?> <input type="checkbox" checked="checked" name="split_screen"/> <?php } else { ?> <input type="checkbox" name="split_screen"/> <?php } ?>

<p />

<?php cmtx_set_csrf_form_key(); ?>
<input type="submit" class="button" name="submit" title="<?php echo CMTX_BUTTON_UPDATE; ?>" value="<?php echo CMTX_BUTTON_UPDATE; ?>"/>

</form>