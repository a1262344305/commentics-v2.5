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
define('CMTX_FORM_HEADING', 'Dodajte komentar');

/* Form disabled messages */
define('CMTX_ALL_FORMS_DISABLED', 'Dodavanje komentara je onemogućeno.');
define('CMTX_THIS_FORM_DISABLED', 'Dodavanje komentara je onemogućeno za ovu stranicu.');

/* Open form link */
define('CMTX_OPEN_FORM', 'Prikaz obrasca');

/* JavaScript disabled message */
define('CMTX_JAVASCRIPT_DISABLED', 'Upozorenje: neke usluge dostupne su samo uz uključen JavaScript.');

/* Reply */
define('CMTX_REPLY_MESSAGE', 'Odgovor na');
define('CMTX_REPLY_CANCEL', '[Odustani]');
define('CMTX_REPLY_NOBODY', 'Ne odgovarate nikomu.');

/* Required */
define('CMTX_REQUIRED_SYMBOL', '*');
define('CMTX_REQUIRED_SYMBOL_MESSAGE', CMTX_REQUIRED_SYMBOL . ' Potrebne informacije');

/* Field labels */
define('CMTX_LABEL_NAME', 'Naziv:');
define('CMTX_LABEL_EMAIL', 'E-mail:');
define('CMTX_LABEL_WEBSITE', 'Web:');
define('CMTX_LABEL_TOWN', 'Grad:');
define('CMTX_LABEL_COUNTRY', 'Država:');
define('CMTX_LABEL_RATING', 'Ocjena:');
define('CMTX_LABEL_COMMENT', 'Komentar:');
define('CMTX_LABEL_QUESTION', 'Pitanje:');
define('CMTX_LABEL_CAPTCHA', 'Captcha:');

/* Field titles */
define('CMTX_TITLE_NAME', 'Unesite ime');
define('CMTX_TITLE_EMAIL', 'Unesite adresu e-pošte');
define('CMTX_TITLE_WEBSITE', 'Unesite web stranicu');
define('CMTX_TITLE_TOWN', 'Unesite grad');
define('CMTX_TITLE_COMMENT', 'Unesite komentar');
define('CMTX_TITLE_QUESTION', 'Unesite odgovor na pitanje');
define('CMTX_TITLE_NOTIFY', 'Želim primati e-mail obavjesti');
define('CMTX_TITLE_REMEMBER', 'Sjeti se moje ulaza obrasca');
define('CMTX_TITLE_PRIVACY', 'Prihvaćam pravila o privatnosti');
define('CMTX_TITLE_TERMS', 'Slažem se s uvjetima korištenja');
define('CMTX_TITLE_SUBMIT', 'Dodajte komentar');
define('CMTX_TITLE_PREVIEW', 'Pregled');

/* Note displayed after email field */
define('CMTX_NOTE_EMAIL', '(neće biti objavljeno)');

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
define('CMTX_BB_INVALID_LINK', '<i>(neispravan link)</i>');
define('CMTX_BB_INVALID_EMAIL', '<i>(neispravan e-mail)</i>');
define('CMTX_BB_INVALID_IMAGE', '<i>(neispravna slika)</i>');
define('CMTX_BB_INVALID_VIDEO', '<i>(neispravan video)</i>');

/* Text displayed before/after the counter */
define('CMTX_TEXT_COUNTER', '%s');

/* Text displayed before question field */
define('CMTX_TEXT_QUESTION', 'Unesite odgovor:');

/* Text displayed for Securimage captcha */
define('CMTX_TEXT_SECURIMAGE', 'Upišite kodu:');
define('CMTX_TITLE_SECURIMAGE', 'Upišite kodu sa slike');
define('CMTX_TITLE_SECURIMAGE_AUDIO', 'Audio');
define('CMTX_TITLE_SECURIMAGE_REFRESH', 'Ponovo');

/* Text displayed if ReCaptcha key missing */
define('CMTX_RECAPTCHA_NO_KEY', 'API ključ nedostaje u stranica Admin');

/* Text displayed after notify checkbox */
define('CMTX_TEXT_NOTIFY', 'Obavijestite me o novim komentarima putem e-maila.');

/* Text displayed after remember checkbox */
define('CMTX_TEXT_REMEMBER', 'Pamti moje podatke na ovom računalu.');

/* Text displayed after privacy checkbox */
define('CMTX_TEXT_PRIVACY', 'Slažem se sa sadržajem <a href="' . cmtx_comments_folder() . 'agreement/croatian/privacy_policy.html" class="cmtx_privacy_link" title="Politika privatnosti." target="_blank" rel="nofollow">ugovora politike privatnosti</a>.');

/* Text displayed after terms checkbox */
define('CMTX_TEXT_TERMS', 'Pročitao sam i slažem se sa <a href="' . cmtx_comments_folder() . 'agreement/croatian/terms_and_conditions.html" class="cmtx_terms_link" title="Uvjeti korišćenja." target="_blank" rel="nofollow">uvjetima korišćenja</a>.');

/* Text for form submit button */
define('CMTX_SUBMIT_BUTTON', 'Novi komentar');

/* Text for form preview button */
define('CMTX_PREVIEW_BUTTON', 'Predgled');

/* Text for form buttons when processing */
define('CMTX_PROCESSING_BUTTON', 'Molimo pričekajte ...');

/* Text for 'powered by' statement */
define('CMTX_POWERED_BY', 'Usluge nudi');

?>