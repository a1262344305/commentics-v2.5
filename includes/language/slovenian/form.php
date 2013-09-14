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
define('CMTX_ALL_FORMS_DISABLED', 'Dodajanje komentarjev je onemogočeno.');
define('CMTX_THIS_FORM_DISABLED', 'Na tej strani je dodajanje komentarjev onemogočeno.');

/* Open form link */
define('CMTX_OPEN_FORM', 'Prikaz obrazca');

/* JavaScript disabled message */
define('CMTX_JAVASCRIPT_DISABLED', 'Pozor: nekatere storitve so na razpolago le ob vključenem JavaScript-u.');

/* Reply */
define('CMTX_REPLY_MESSAGE', 'Odgovarjate na');
define('CMTX_REPLY_CANCEL', '[preklic]');
define('CMTX_REPLY_NOBODY', 'Ne odgovarjate nikomur.');

/* Required */
define('CMTX_REQUIRED_SYMBOL', '*');
define('CMTX_REQUIRED_SYMBOL_MESSAGE', CMTX_REQUIRED_SYMBOL . ' Zahtevan podatek');

/* Field labels */
define('CMTX_LABEL_NAME', 'Ime:');
define('CMTX_LABEL_EMAIL', 'E-pošta:');
define('CMTX_LABEL_WEBSITE', 'Web:');
define('CMTX_LABEL_TOWN', 'Mesto:');
define('CMTX_LABEL_COUNTRY', 'Država:');
define('CMTX_LABEL_RATING', 'Ocena:');
define('CMTX_LABEL_COMMENT', 'Komentar:');
define('CMTX_LABEL_QUESTION', 'Vprašanje:');
define('CMTX_LABEL_CAPTCHA', 'Captcha:');

/* Field titles */
define('CMTX_TITLE_NAME', 'Vpišite ime');
define('CMTX_TITLE_EMAIL', 'Vpišite e-naslov');
define('CMTX_TITLE_WEBSITE', 'Vpišite spletno stran');
define('CMTX_TITLE_TOWN', 'Vpišite mesto');
define('CMTX_TITLE_COMMENT', 'Vpišite komentar');
define('CMTX_TITLE_QUESTION', 'Odgovorite na vprašanje');
define('CMTX_TITLE_NOTIFY', 'Želim prejemati e-poštna obvestila');
define('CMTX_TITLE_REMEMBER', 'Pomnjenje v obrazec vnešenenih podatkov');
define('CMTX_TITLE_PRIVACY', 'Strinjam se s politiko zasebnosti');
define('CMTX_TITLE_TERMS', 'Strinjam se s pogoji uporabe');
define('CMTX_TITLE_SUBMIT', 'Dodajte komentar');
define('CMTX_TITLE_PREVIEW', 'Predogled');

/* Note displayed after email field */
define('CMTX_NOTE_EMAIL', '(ne bo objavljeno)');

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
define('CMTX_TEXT_QUESTION', 'Vnesite odgovor:');

/* Text displayed for Securimage captcha */
define('CMTX_TEXT_SECURIMAGE', 'Vnesite kodo:');
define('CMTX_TITLE_SECURIMAGE', 'Vnesite kodo s slike');
define('CMTX_TITLE_SECURIMAGE_AUDIO', 'Zvok');
define('CMTX_TITLE_SECURIMAGE_REFRESH', 'Osveži');

/* Text displayed if ReCaptcha key missing */
define('CMTX_RECAPTCHA_NO_KEY', 'API ključ manjka! Vnesite ga na Admin strani');

/* Text displayed after notify checkbox */
define('CMTX_TEXT_NOTIFY', 'Obveščajte me o novih komentarjih po e-pošti.');

/* Text displayed after remember checkbox */
define('CMTX_TEXT_REMEMBER', 'Zapomni si moje podatke na tem računalniku.');

/* Text displayed after privacy checkbox */
define('CMTX_TEXT_PRIVACY', 'Strinjam se z vsebino <a href="' . cmtx_comments_folder() . 'agreement/slovenian/privacy_policy.html" class="cmtx_privacy_link" title="Ogled politike zasebnosti." target="_blank" rel="nofollow">politika zasebnosti</a>.');

/* Text displayed after terms checkbox */
define('CMTX_TEXT_TERMS', 'Strinjam se s <a href="' . cmtx_comments_folder() . 'agreement/slovenian/terms_and_conditions.html" class="cmtx_terms_link" title="Pogoji uporabe." target="_blank" rel="nofollow">pogoji uporabe</a>.');

/* Text for form submit button */
define('CMTX_SUBMIT_BUTTON', 'Nov komentar');

/* Text for form preview button */
define('CMTX_PREVIEW_BUTTON', 'Predogled');

/* Text for form buttons when processing */
define('CMTX_PROCESSING_BUTTON', 'Prosimo počakajte ...');

/* Text for 'powered by' statement */
define('CMTX_POWERED_BY', 'Storitev omogoča');

?>