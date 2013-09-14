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
define('CMTX_FORM_HEADING', 'Commentaar Toevoegen');

/* Form disabled messages */
define('CMTX_ALL_FORMS_DISABLED', 'Berichten toevoegen is uitgeschakeld.');
define('CMTX_THIS_FORM_DISABLED', 'Berichten toevoegen is uitgeschakeld voor deze pagina.');

/* Open form link */
define('CMTX_OPEN_FORM', 'Geef het formulier');

/* JavaScript disabled message */
define('CMTX_JAVASCRIPT_DISABLED', 'JavaScript moet zijn ingeschakeld voor sommige opties om te werken.');

/* Reply */
define('CMTX_REPLY_MESSAGE', 'U antwoord op');
define('CMTX_REPLY_CANCEL', '[annuleer]');
define('CMTX_REPLY_NOBODY', 'u reageerd op niemand.');

/* Required */
define('CMTX_REQUIRED_SYMBOL', '*');
define('CMTX_REQUIRED_SYMBOL_MESSAGE', CMTX_REQUIRED_SYMBOL . ' Verplichte informatie');

/* Field labels */
define('CMTX_LABEL_NAME', 'Naam:');
define('CMTX_LABEL_EMAIL', 'Email:');
define('CMTX_LABEL_WEBSITE', 'Website:');
define('CMTX_LABEL_TOWN', 'Stad:');
define('CMTX_LABEL_COUNTRY', 'Land:');
define('CMTX_LABEL_RATING', 'Waardering:');
define('CMTX_LABEL_COMMENT', 'Bericht:');
define('CMTX_LABEL_QUESTION', 'Vraag:');
define('CMTX_LABEL_CAPTCHA', 'Captcha:');

/* Field titles */
define('CMTX_TITLE_NAME', 'Voer naam in');
define('CMTX_TITLE_EMAIL', 'Voer emailadres in');
define('CMTX_TITLE_WEBSITE', 'Voer uw website in');
define('CMTX_TITLE_TOWN', 'Voer stad in');
define('CMTX_TITLE_COMMENT', 'Voer bericht in');
define('CMTX_TITLE_QUESTION', 'Voer antwoord op vraag in');
define('CMTX_TITLE_NOTIFY', 'Ontvang email berichten');
define('CMTX_TITLE_REMEMBER', 'Onthoud mijn vorm ingangen');
define('CMTX_TITLE_PRIVACY', 'Akkoord met privacy policy');
define('CMTX_TITLE_TERMS', 'Akkoord met voorwaarden');
define('CMTX_TITLE_SUBMIT', 'Voeg bericht toe');
define('CMTX_TITLE_PREVIEW', 'Voorbeeld');

/* Note displayed after email field */
define('CMTX_NOTE_EMAIL', '(wordt niet getoond)');

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
define('CMTX_BB_INVALID_LINK', '<i>(ongeldige-link)</i>');
define('CMTX_BB_INVALID_EMAIL', '<i>(ongeldige-email)</i>');
define('CMTX_BB_INVALID_IMAGE', '<i>(ongeldige-afbeelding)</i>');
define('CMTX_BB_INVALID_VIDEO', '<i>(ongeldige-video)</i>');

/* Text displayed before/after the counter */
define('CMTX_TEXT_COUNTER', '%s');

/* Text displayed before question field */
define('CMTX_TEXT_QUESTION', 'Voer antwoord in:');

/* Text displayed for Securimage captcha */
define('CMTX_TEXT_SECURIMAGE', 'Geef decode in:');
define('CMTX_TITLE_SECURIMAGE', 'Geef de code van de afbeelding in');
define('CMTX_TITLE_SECURIMAGE_AUDIO', 'Audio');
define('CMTX_TITLE_SECURIMAGE_REFRESH', 'Ververs');

/* Text displayed if ReCaptcha key missing */
define('CMTX_RECAPTCHA_NO_KEY', 'API-sleutel(s) ontbreekt in de ReCaptcha admin pagina.');

/* Text displayed after notify checkbox */
define('CMTX_TEXT_NOTIFY', 'Meld me over nieuwe berichten via email.');

/* Text displayed after remember checkbox */
define('CMTX_TEXT_REMEMBER', 'Onthoud mijn gegevens op deze computer.');

/* Text displayed after privacy checkbox */
define('CMTX_TEXT_PRIVACY', 'Ik begrijp en heb het Privacybeleid gelezen <a href="' . cmtx_comments_folder() . 'agreement/dutch/privacy_policy.html" class="cmtx_privacy_link" title="Privacybeleid" target="_blank" rel="nofollow">Privacybeleid</a>.');

/* Text displayed after terms checkbox */
define('CMTX_TEXT_TERMS', 'Ik begrijp de voorwaarden en heb ze gelezen <a href="' . cmtx_comments_folder() . 'agreement/dutch/terms_and_conditions.html" class="cmtx_terms_link" title="Voorwaarden" target="_blank" rel="nofollow">Voorwaarden</a>.');

/* Text for form submit button */
define('CMTX_SUBMIT_BUTTON', 'Voeg bericht toe');

/* Text for form preview button */
define('CMTX_PREVIEW_BUTTON', 'Voorbeeld');

/* Text for form buttons when processing */
define('CMTX_PROCESSING_BUTTON', 'Aub wachten..');

/* Text for 'powered by' statement */
define('CMTX_POWERED_BY', 'Aangedreven door');

?>