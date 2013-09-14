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
define('CMTX_FORM_HEADING', 'Kommentar Hinzufügen');

/* Form disabled messages */
define('CMTX_ALL_FORMS_DISABLED', 'Das Hinzufügen von Kommentaren wurde deaktiviert.');
define('CMTX_THIS_FORM_DISABLED', 'Das Hinzufügen von Kommentaren für diese Seite wurde deaktiviert.');

/* Open form link */
define('CMTX_OPEN_FORM', 'Zeigen Sie das Formular');

/* JavaScript disabled message */
define('CMTX_JAVASCRIPT_DISABLED', 'JavaScript muß aktiviert sein, um alle Funktionen dieser Seite nutzen zu k&ouml;nnen.');

/* Reply */
define('CMTX_REPLY_MESSAGE', 'Sie sind zu beantworten');
define('CMTX_REPLY_CANCEL', '[stornieren]');
define('CMTX_REPLY_NOBODY', 'Sie sind nicht Antworten auf niemanden.');

/* Required */
define('CMTX_REQUIRED_SYMBOL', '*');
define('CMTX_REQUIRED_SYMBOL_MESSAGE', CMTX_REQUIRED_SYMBOL . ' Pflichtfeld');

/* Field labels */
define('CMTX_LABEL_NAME', 'Name:');
define('CMTX_LABEL_EMAIL', 'E-Mail:');
define('CMTX_LABEL_WEBSITE', 'Webseite:');
define('CMTX_LABEL_TOWN', 'Stadt:');
define('CMTX_LABEL_COUNTRY', 'Land:');
define('CMTX_LABEL_RATING', 'Bewertung:');
define('CMTX_LABEL_COMMENT', 'Kommentar:');
define('CMTX_LABEL_QUESTION', 'Frage:');
define('CMTX_LABEL_CAPTCHA', 'Captcha:');

/* Field titles */
define('CMTX_TITLE_NAME', 'Geben Sie Ihren Namen ein');
define('CMTX_TITLE_EMAIL', 'Geben Sie Ihre E-Mail-Adresse ein');
define('CMTX_TITLE_WEBSITE', 'Geben Sie Ihre Webseiten-Adresse ein');
define('CMTX_TITLE_TOWN', 'Geben Sie Ihre Stadt ein');
define('CMTX_TITLE_COMMENT', 'Geben Sie Ihren Kommentar ein');
define('CMTX_TITLE_QUESTION', 'Beantworten Sie die Frage');
define('CMTX_TITLE_NOTIFY', 'Via E-Mail benachrichtigen');
define('CMTX_TITLE_REMEMBER', 'Denken Sie daran, meine Form Eingänge');
define('CMTX_TITLE_PRIVACY', 'Ich stimme der Datenschutzerklärung zu');
define('CMTX_TITLE_TERMS', 'Ich stimme den Bedingungen und Konditionen zu');
define('CMTX_TITLE_SUBMIT', 'Kommentar hinzufügen');
define('CMTX_TITLE_PREVIEW', 'Vorschau');

/* Note displayed after email field */
define('CMTX_NOTE_EMAIL', '(wird nicht veröffentlicht)');

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
define('CMTX_TEXT_QUESTION', 'Die Antwort lautet:');

/* Text displayed for Securimage captcha */
define('CMTX_TEXT_SECURIMAGE', 'Enter code:');
define('CMTX_TITLE_SECURIMAGE', 'Enter code from image');
define('CMTX_TITLE_SECURIMAGE_AUDIO', 'Audio');
define('CMTX_TITLE_SECURIMAGE_REFRESH', 'Refresh');

/* Text displayed if ReCaptcha key missing */
define('CMTX_RECAPTCHA_NO_KEY', 'API key(s) missing in ReCaptcha admin page');

/* Text displayed after notify checkbox */
define('CMTX_TEXT_NOTIFY', 'Informiere mich via E-Mail über neue Kommentare.');

/* Text displayed after remember checkbox */
define('CMTX_TEXT_REMEMBER', 'Meine Daten auf diesem Computer.');

/* Text displayed after privacy checkbox */
define('CMTX_TEXT_PRIVACY', 'Ich habe die <a href="' . cmtx_comments_folder() . 'agreement/german/privacy_policy.html" class="cmtx_privacy_link" title="Datenschutzrichtlinien" target="_blank" rel="nofollow">Datenschutzrichtlinien</a> gelesen und verstanden.');

/* Text displayed after terms checkbox */
define('CMTX_TEXT_TERMS', 'Ich habe die <a href="' . cmtx_comments_folder() . 'agreement/german/terms_and_conditions.html" class="cmtx_terms_link" title="Nutzungsbedingungen" target="_blank" rel="nofollow">Nutzungsbedingungen</a> gelesen und stimme ihnen zu.');

/* Text for form submit button */
define('CMTX_SUBMIT_BUTTON', 'Kommentar hinzufügen');

/* Text for form preview button */
define('CMTX_PREVIEW_BUTTON', 'Vorschau');

/* Text for form buttons when processing */
define('CMTX_PROCESSING_BUTTON', 'Bitte warten...');

/* Text for 'powered by' statement */
define('CMTX_POWERED_BY', 'Powered by');

?>