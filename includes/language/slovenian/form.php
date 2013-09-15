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

/* BB Code tags */
define('CMTX_BB_CODE_TAG_BOLD_1', '[B]');
define('CMTX_BB_CODE_TAG_BOLD_2', '[/B]');
define('CMTX_BB_CODE_TAG_ITALIC_1', '[I]');
define('CMTX_BB_CODE_TAG_ITALIC_2', '[/I]');
define('CMTX_BB_CODE_TAG_UNDERLINE_1', '[U]');
define('CMTX_BB_CODE_TAG_UNDERLINE_2', '[/U]');
define('CMTX_BB_CODE_TAG_STRIKE_1', '[STRIKE]');
define('CMTX_BB_CODE_TAG_STRIKE_2', '[/STRIKE]');
define('CMTX_BB_CODE_TAG_SUPERSCRIPT_1', '[SUPERSCRIPT]');
define('CMTX_BB_CODE_TAG_SUPERSCRIPT_2', '[/SUPERSCRIPT]');
define('CMTX_BB_CODE_TAG_SUBSCRIPT_1', '[SUBSCRIPT]');
define('CMTX_BB_CODE_TAG_SUBSCRIPT_2', '[/SUBSCRIPT]');
define('CMTX_BB_CODE_TAG_CODE_1', '[CODE]');
define('CMTX_BB_CODE_TAG_CODE_2', '[/CODE]');
define('CMTX_BB_CODE_TAG_PHP_1', '[PHP]');
define('CMTX_BB_CODE_TAG_PHP_2', '[/PHP]');
define('CMTX_BB_CODE_TAG_QUOTE_1', '[QUOTE]');
define('CMTX_BB_CODE_TAG_QUOTE_2', '[/QUOTE]');
define('CMTX_BB_CODE_TAG_LINE', '[LINE]');
define('CMTX_BB_CODE_TAG_BULLET_1', '[BULLET]');
define('CMTX_BB_CODE_TAG_BULLET_2', '[/BULLET]');
define('CMTX_BB_CODE_TAG_NUMERIC_1', '[NUMERIC]');
define('CMTX_BB_CODE_TAG_NUMERIC_2', '[/NUMERIC]');
define('CMTX_BB_CODE_TAG_ITEM_1', '[ITEM]');
define('CMTX_BB_CODE_TAG_ITEM_2', '[/ITEM]');
define('CMTX_BB_CODE_TAG_LINK_1', '[LINK]');
define('CMTX_BB_CODE_TAG_LINK_2', '[LINK=');
define('CMTX_BB_CODE_TAG_LINK_3', ']');
define('CMTX_BB_CODE_TAG_LINK_4', '[/LINK]');
define('CMTX_BB_CODE_TAG_EMAIL_1', '[EMAIL]');
define('CMTX_BB_CODE_TAG_EMAIL_2', '[EMAIL=');
define('CMTX_BB_CODE_TAG_EMAIL_3', ']');
define('CMTX_BB_CODE_TAG_EMAIL_4', '[/EMAIL]');
define('CMTX_BB_CODE_TAG_IMAGE_1', '[IMAGE]');
define('CMTX_BB_CODE_TAG_IMAGE_2', '[/IMAGE]');
define('CMTX_BB_CODE_TAG_VIDEO_1', '[VIDEO]');
define('CMTX_BB_CODE_TAG_VIDEO_2', '[/VIDEO]');

/* BB Code titles */
define('CMTX_BB_CODE_TITLE_BOLD', 'Bold');
define('CMTX_BB_CODE_TITLE_ITALIC', 'Italic');
define('CMTX_BB_CODE_TITLE_UNDERLINE', 'Underline');
define('CMTX_BB_CODE_TITLE_STRIKE', 'Strike');
define('CMTX_BB_CODE_TITLE_SUPERSCRIPT', 'Superscript');
define('CMTX_BB_CODE_TITLE_SUBSCRIPT', 'Subscript');
define('CMTX_BB_CODE_TITLE_CODE', 'Code');
define('CMTX_BB_CODE_TITLE_PHP', 'PHP');
define('CMTX_BB_CODE_TITLE_QUOTE', 'Quote');
define('CMTX_BB_CODE_TITLE_LINE', 'Insert line');
define('CMTX_BB_CODE_TITLE_BULLET', 'Insert bullet list');
define('CMTX_BB_CODE_TITLE_NUMERIC', 'Insert numeric list');
define('CMTX_BB_CODE_TITLE_LINK', 'Insert web link');
define('CMTX_BB_CODE_TITLE_EMAIL', 'Insert email link');
define('CMTX_BB_CODE_TITLE_IMAGE', 'Insert image');
define('CMTX_BB_CODE_TITLE_VIDEO', 'Insert video');

/* Smiley tags */
define('CMTX_SMILEY_TAG_SMILE', ':smile:');
define('CMTX_SMILEY_TAG_SAD', ':sad:');
define('CMTX_SMILEY_TAG_HUH', ':huh:');
define('CMTX_SMILEY_TAG_LAUGH', ':laugh:');
define('CMTX_SMILEY_TAG_MAD', ':mad:');
define('CMTX_SMILEY_TAG_TONGUE', ':tongue:');
define('CMTX_SMILEY_TAG_CRYING', ':crying:');
define('CMTX_SMILEY_TAG_GRIN', ':grin:');
define('CMTX_SMILEY_TAG_WINK', ':wink:');
define('CMTX_SMILEY_TAG_SCARED', ':scared:');
define('CMTX_SMILEY_TAG_COOL', ':cool:');
define('CMTX_SMILEY_TAG_SLEEP', ':sleep:');
define('CMTX_SMILEY_TAG_BLUSH', ':blush:');
define('CMTX_SMILEY_TAG_UNSURE', ':unsure:');
define('CMTX_SMILEY_TAG_SHOCKED', ':shocked:');

/* Smiley titles */
define('CMTX_SMILEY_TITLE_SMILE', 'Smile');
define('CMTX_SMILEY_TITLE_SAD', 'Sad');
define('CMTX_SMILEY_TITLE_HUH', 'Huh');
define('CMTX_SMILEY_TITLE_LAUGH', 'Laugh');
define('CMTX_SMILEY_TITLE_MAD', 'Mad');
define('CMTX_SMILEY_TITLE_TONGUE', 'Tongue');
define('CMTX_SMILEY_TITLE_CRYING', 'Crying');
define('CMTX_SMILEY_TITLE_GRIN', 'Grin');
define('CMTX_SMILEY_TITLE_WINK', 'Wink');
define('CMTX_SMILEY_TITLE_SCARED', 'Scared');
define('CMTX_SMILEY_TITLE_COOL', 'Cool');
define('CMTX_SMILEY_TITLE_SLEEP', 'Sleep');
define('CMTX_SMILEY_TITLE_BLUSH', 'Blush');
define('CMTX_SMILEY_TITLE_UNSURE', 'Unsure');
define('CMTX_SMILEY_TITLE_SHOCKED', 'Shocked');

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
define('CMTX_VIDEO_DIALOG_CONTENT_1', 'Please enter the link of the video. Supports');
define('CMTX_VIDEO_DIALOG_CONTENT_2', 'YouTube, Vimeo, MetaCafe and Dailymotion.');
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