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

/* Anchors */
define('CMTX_ANCHOR_FORM', '#cmtx_form');

/* Heading */
define('CMTX_FORM_HEADING', 'เพิ่มความคิดเห็น');

/* Form disabled messages */
define('CMTX_ALL_FORMS_DISABLED', 'การแสดงความคิดเห็น ไม่ได้เปิดใช้งาน');
define('CMTX_THIS_FORM_DISABLED', 'การแสดงความคิดเห็นสำหรับเนื้อหาในหน้านี้ ไม่สามารถดำเนินการได้');

/* Open form link */
define('CMTX_OPEN_FORM', 'แสดงฟอร์ม');

/* JavaScript disabled message */
define('CMTX_JAVASCRIPT_DISABLED', 'ต้องเปิดใช้งาน JavaScript คุณสมบัติซึ่งเป็นองค์ประกอบจึงสามารถทำงานได้');

/* Reply */
define('CMTX_REPLY_MESSAGE', 'คุณกำลังตอบข้อความคิดเห็นของ');
define('CMTX_REPLY_CANCEL', '[ยกเลิก]');
define('CMTX_REPLY_NOBODY', 'คุณไม่ได้กำลังตอบข้อความคิดเห็นของผู้ใด');

/* Required */
define('CMTX_REQUIRED_SYMBOL', '*');
define('CMTX_REQUIRED_SYMBOL_MESSAGE', CMTX_REQUIRED_SYMBOL . ' ข้อมูลซึ่งต้องระบุ');

/* Field labels */
define('CMTX_LABEL_NAME', 'ชื่อ:');
define('CMTX_LABEL_EMAIL', 'ที่อยู่อีเมล:');
define('CMTX_LABEL_WEBSITE', 'ที่อยู่เว็บไซต์:');
define('CMTX_LABEL_TOWN', 'ชื่อเมือง:');
define('CMTX_LABEL_COUNTRY', 'ชื่อประเทศ:');
define('CMTX_LABEL_RATING', 'โหวต:');
define('CMTX_LABEL_COMMENT', 'ข้อความคิดเห็น:');
define('CMTX_LABEL_QUESTION', 'คำถาม:');
define('CMTX_LABEL_CAPTCHA', 'โค้ด:');

/* Field titles */
define('CMTX_TITLE_NAME', 'พิมพ์ชื่อ');
define('CMTX_TITLE_EMAIL', 'พิมพ์ที่อยู่อีเมล');
define('CMTX_TITLE_WEBSITE', 'พิมพ์ที่อยู่เว็บไซต์');
define('CMTX_TITLE_TOWN', 'พิมพ์ชื่อเมืองที่อาศัยอยู่');
define('CMTX_TITLE_COMMENT', 'พิมพ์ข้อความคิดเห็น');
define('CMTX_TITLE_QUESTION', 'พิมพ์คำตอบที่ถูกต้องตรงกับคำถาม');
define('CMTX_TITLE_NOTIFY', 'ประสงค์รับ อีเมลแจ้งเตือน');
define('CMTX_TITLE_REMEMBER', 'จำปัจจัยการผลิตรูปแบบของฉัน');
define('CMTX_TITLE_PRIVACY', 'ยอมรับตามนโยบายส่วนบุคคล');
define('CMTX_TITLE_TERMS', 'ยอมรับตามเงื่อนไขและข้อตกลง');
define('CMTX_TITLE_SUBMIT', 'เพิ่มข้อความคิดเห็น');
define('CMTX_TITLE_PREVIEW', 'ดูตัวอย่างการแสดงผล');

/* Note displayed after email field */
define('CMTX_NOTE_EMAIL', '(จะไม่ถูกเปิดเผย');

/* Text displayed for BB Code bullet dialog */
define('CMTX_BULLET_DIALOG_HEADING', 'Insert Bullet List');
define('CMTX_BULLET_DIALOG_CONTENT_1', 'Please enter at least one item.');
define('CMTX_BULLET_DIALOG_CONTENT_2', 'Item:');
define('CMTX_BULLET_DIALOG_INSERT', 'Insert');
define('CMTX_BULLET_DIALOG_CANCEL', 'Cancel');

/* Text displayed for BB Code numeric dialog */
define('CMTX_NUMERIC_DIALOG_HEADING', 'Insert Numeric List');
define('CMTX_NUMERIC_DIALOG_CONTENT_1', 'Please enter at least one item.');
define('CMTX_NUMERIC_DIALOG_CONTENT_2', 'Item:');
define('CMTX_NUMERIC_DIALOG_INSERT', 'Insert');
define('CMTX_NUMERIC_DIALOG_CANCEL', 'Cancel');

/* Text displayed for BB Code link dialog */
define('CMTX_LINK_DIALOG_HEADING', 'Insert Link');
define('CMTX_LINK_DIALOG_CONTENT_1', 'Please enter the link of the website');
define('CMTX_LINK_DIALOG_CONTENT_2', 'Optionally you can add display text');
define('CMTX_LINK_DIALOG_INSERT', 'Insert');
define('CMTX_LINK_DIALOG_CANCEL', 'Cancel');

/* Text displayed for BB Code email dialog */
define('CMTX_EMAIL_DIALOG_HEADING', 'Insert Email');
define('CMTX_EMAIL_DIALOG_CONTENT_1', 'Please enter the email address');
define('CMTX_EMAIL_DIALOG_CONTENT_2', 'Optionally add any display text');
define('CMTX_EMAIL_DIALOG_INSERT', 'Insert');
define('CMTX_EMAIL_DIALOG_CANCEL', 'Cancel');

/* Text displayed for BB Code image dialog */
define('CMTX_IMAGE_DIALOG_HEADING', 'Insert Image');
define('CMTX_IMAGE_DIALOG_CONTENT', 'Please enter the link of the image');
define('CMTX_IMAGE_DIALOG_INSERT', 'Insert');
define('CMTX_IMAGE_DIALOG_CANCEL', 'Cancel');

/* Text displayed for BB Code video dialog */
define('CMTX_VIDEO_DIALOG_HEADING', 'Insert Video');
define('CMTX_VIDEO_DIALOG_CONTENT_1', 'Please enter the link of the video. Supports:');
define('CMTX_VIDEO_DIALOG_CONTENT_2', 'YouTube - Vimeo - MetaCafe - Dailymotion');
define('CMTX_VIDEO_DIALOG_INSERT', 'Insert');
define('CMTX_VIDEO_DIALOG_CANCEL', 'Cancel');

/* Text displayed for invalid BB Code entries */
define('CMTX_BB_INVALID_LINK', '<i>(การเชื่อมโยงไม่ถูกต้อง)</i>');
define('CMTX_BB_INVALID_EMAIL', '<i>(ที่อยู่อีเมลไม่ถูกต้อง)</i>');
define('CMTX_BB_INVALID_IMAGE', '<i>(ที่อยู่ไฟล์ภาพไม่ถูกต้อง)</i>');
define('CMTX_BB_INVALID_VIDEO', '<i>(วิดีโอที่ไม่ถูกต้อง)</i>');

/* Text displayed before/after the counter */
define('CMTX_TEXT_COUNTER', '%s');

/* Text displayed before question field */
define('CMTX_TEXT_QUESTION', 'พิมพ์คำตอบ:');

/* Text displayed for Securimage captcha */
define('CMTX_TEXT_SECURIMAGE', 'Enter code:');
define('CMTX_TITLE_SECURIMAGE', 'Enter code from image');
define('CMTX_TITLE_SECURIMAGE_AUDIO', 'Audio');
define('CMTX_TITLE_SECURIMAGE_REFRESH', 'Refresh');

/* Text displayed if ReCaptcha key missing */
define('CMTX_RECAPTCHA_NO_KEY', 'API key(s) missing in ReCaptcha admin page');

/* Text displayed after notify checkbox */
define('CMTX_TEXT_NOTIFY', 'ส่งอีเมลแจ้งเตือนให้ฉันเมื่อมีข้อความคิดเห็นใหม่');

/* Text displayed after remember checkbox */
define('CMTX_TEXT_REMEMBER', 'จำรายละเอียดของฉันบนคอมพิวเตอร์เครื่องนี้');

/* Text displayed after privacy checkbox */
define('CMTX_TEXT_PRIVACY', 'ฉันได้อ่านและเข้าใจเป็นอย่างดีแล้วเกี่ยวกับ <a href="' . cmtx_comments_folder() . 'agreement/thai/privacy_policy.html" class="cmtx_privacy_link" title="View privacy policy" target="_blank" rel="nofollow">นโยบายส่วนบุคคล</a>.');

/* Text displayed after terms checkbox */
define('CMTX_TEXT_TERMS', 'ฉันได้อ่านและยอมรับตาม <a href="' . cmtx_comments_folder() . 'agreement/thai/terms_and_conditions.html" class="cmtx_terms_link" title="View terms and conditions" target="_blank" rel="nofollow">ข้อตกลงและเงื่อนไข</a>.');

/* Text for form submit button */
define('CMTX_SUBMIT_BUTTON', 'เพิ่มข้อความคิดเห็น');

/* Text for form preview button */
define('CMTX_PREVIEW_BUTTON', 'ดูตัวอย่างการแสดงผล');

/* Text for form buttons when processing */
define('CMTX_PROCESSING_BUTTON', 'กรุณารอสักครู่..');

/* Text for 'powered by' statement */
define('CMTX_POWERED_BY', 'ขับเคลื่อน โดย');

?>