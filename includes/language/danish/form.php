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
define('CMTX_FORM_HEADING', 'Tilføj kommentar');

/* Form disabled messages */
define('CMTX_ALL_FORMS_DISABLED', 'Adding comments has been disabled.');
define('CMTX_THIS_FORM_DISABLED', 'Adding comments has been disabled for this page.');

/* Open form link */
define('CMTX_OPEN_FORM', 'Åbn formular');

/* JavaScript disabled message */
define('CMTX_JAVASCRIPT_DISABLED', 'JavaScript skal være slået til, hvis alle funktioner skal virke.');

/* Reply */
define('CMTX_REPLY_MESSAGE', 'Du svarer');
define('CMTX_REPLY_CANCEL', '[fortryd]');
define('CMTX_REPLY_NOBODY', 'Du svarer ikke nogen.');

/* Required */
define('CMTX_REQUIRED_SYMBOL', '*');
define('CMTX_REQUIRED_SYMBOL_MESSAGE', CMTX_REQUIRED_SYMBOL . ' Skal udfyldes');

/* Field labels */
define('CMTX_LABEL_NAME', 'Navn:');
define('CMTX_LABEL_EMAIL', 'Mailadresse:');
define('CMTX_LABEL_WEBSITE', 'Hjemmeside:');
define('CMTX_LABEL_TOWN', 'By:');
define('CMTX_LABEL_COUNTRY', 'Land:');
define('CMTX_LABEL_RATING', 'Karakter:');
define('CMTX_LABEL_COMMENT', 'Kommentar:');
define('CMTX_LABEL_QUESTION', 'Spamfælde:');
define('CMTX_LABEL_CAPTCHA', 'Captcha:');

/* Field titles */
define('CMTX_TITLE_NAME', 'Indtast navn');
define('CMTX_TITLE_EMAIL', 'Indtast mailadresse');
define('CMTX_TITLE_WEBSITE', 'Indtast adresse til hjemmeside');
define('CMTX_TITLE_TOWN', 'Indtast by');
define('CMTX_TITLE_COMMENT', 'Indtast kommentar');
define('CMTX_TITLE_QUESTION', 'Indtast svar på spørgsmålet');
define('CMTX_TITLE_NOTIFY', 'Modtag besked via mail');
define('CMTX_TITLE_REMEMBER', 'Husk mine formulardata');
define('CMTX_TITLE_PRIVACY', 'Accepter privatslivspolitikken');
define('CMTX_TITLE_TERMS', 'Accepter betingelserne');
define('CMTX_TITLE_SUBMIT', 'Tilføj kommentar');
define('CMTX_TITLE_PREVIEW', 'Smugkig');

/* Note displayed after email field */
define('CMTX_NOTE_EMAIL', '(offentliggøres ikke)');

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

/* Text displayed before/after the counter */
define('CMTX_TEXT_COUNTER', '%s');

/* Text displayed before question field */
define('CMTX_TEXT_QUESTION', 'Indtast svar:');

/* Text displayed for Securimage captcha */
define('CMTX_TEXT_SECURIMAGE', 'Enter code:');
define('CMTX_TITLE_SECURIMAGE', 'Enter code from image');
define('CMTX_TITLE_SECURIMAGE_AUDIO', 'Audio');
define('CMTX_TITLE_SECURIMAGE_REFRESH', 'Refresh');

/* Text displayed if ReCaptcha key(s) missing */
define('CMTX_RECAPTCHA_NO_KEY', 'API key(s) missing in ReCaptcha admin page');

/* Text displayed after notify checkbox */
define('CMTX_TEXT_NOTIFY', 'Giv mig besked via mail om nye kommentarer.');

/* Text displayed after remember checkbox */
define('CMTX_TEXT_REMEMBER', 'Husk mine formulardata på denne computer');

/* Text displayed after privacy checkbox */
define('CMTX_TEXT_PRIVACY', 'Jeg har læst og forstået <a href="' . cmtx_comments_folder() . 'agreement/danish/privacy_policy.html" class="cmtx_privacy_link" title="Læs privatlivspolitikken" target="_blank" rel="nofollow">privatlivspolitikken</a>.');

/* Text displayed after terms checkbox */
define('CMTX_TEXT_TERMS', 'Jeg har læst og accepterer <a href="' . cmtx_comments_folder() . 'agreement/danish/terms_and_conditions.html" class="cmtx_terms_link" title="Læs betingelserne" target="_blank" rel="nofollow">betingelserne</a>.');

/* Text for form submit button */
define('CMTX_SUBMIT_BUTTON', 'Tilføj kommentar');

/* Text for form preview button */
define('CMTX_PREVIEW_BUTTON', 'Smugkig');

/* Text for form buttons when processing */
define('CMTX_PROCESSING_BUTTON', 'Vent..');

/* Text for 'powered by' statement */
define('CMTX_POWERED_BY', 'Powered by');

?>