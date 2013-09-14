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
define('CMTX_FORM_HEADING', 'Добави коментар');

/* Form disabled messages */
define('CMTX_ALL_FORMS_DISABLED', 'Добавянето на коментари е изключено.');
define('CMTX_THIS_FORM_DISABLED', 'Добавянето на коментари е изключено на тази страница.');

/* Open form link */
define('CMTX_OPEN_FORM', 'Отворете формата');

/* JavaScript disabled message */
define('CMTX_JAVASCRIPT_DISABLED', 'Трябва да включите JavaScript, за да работят някои функции.');

/* Reply */
define('CMTX_REPLY_MESSAGE', 'Вие отговаряте на');
define('CMTX_REPLY_CANCEL', '[Откажи]');
define('CMTX_REPLY_NOBODY', 'Вие не отговаряте на никого.');

/* Required */
define('CMTX_REQUIRED_SYMBOL', '*');
define('CMTX_REQUIRED_SYMBOL_MESSAGE', CMTX_REQUIRED_SYMBOL . ' Необходима информация');

/* Field labels */
define('CMTX_LABEL_NAME', 'Име:');
define('CMTX_LABEL_EMAIL', 'Имейл:');
define('CMTX_LABEL_WEBSITE', 'Уеб сайт:');
define('CMTX_LABEL_TOWN', 'Град:');
define('CMTX_LABEL_COUNTRY', 'Държава:');
define('CMTX_LABEL_RATING', 'Оценка:');
define('CMTX_LABEL_COMMENT', 'Коментар:');
define('CMTX_LABEL_QUESTION', 'Въпрос:');
define('CMTX_LABEL_CAPTCHA', 'Код:');

/* Field titles */
define('CMTX_TITLE_NAME', 'Въведете име');
define('CMTX_TITLE_EMAIL', 'Въведете имейл');
define('CMTX_TITLE_WEBSITE', 'Въведете уеб сайт');
define('CMTX_TITLE_TOWN', 'Въведете град');
define('CMTX_TITLE_COMMENT', 'Въведете коментар');
define('CMTX_TITLE_QUESTION', 'Въведете отговор на въпроса');
define('CMTX_TITLE_NOTIFY', 'Искам да получавам известия по имейл');
define('CMTX_TITLE_REMEMBER', 'Запомни въведения текст');
define('CMTX_TITLE_PRIVACY', 'Съгласен съм с Условията за защита на личните данни');
define('CMTX_TITLE_TERMS', 'Съгласен съм с другите условия');
define('CMTX_TITLE_SUBMIT', 'Добави коментар');
define('CMTX_TITLE_PREVIEW', 'Покажи');

/* Note displayed after email field */
define('CMTX_NOTE_EMAIL', '(няма да бъде публикуван)');

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
define('CMTX_TEXT_QUESTION', 'Въведете отговора:');
/* Text displayed for Securimage captcha */
define('CMTX_TEXT_SECURIMAGE', 'Enter code:');
define('CMTX_TITLE_SECURIMAGE', 'Enter code from image');
define('CMTX_TITLE_SECURIMAGE_AUDIO', 'Audio');
define('CMTX_TITLE_SECURIMAGE_REFRESH', 'Refresh');

/* Text displayed if ReCaptcha key(s) missing */
define('CMTX_RECAPTCHA_NO_KEY', 'API ключ(ове) липсват е Settings -> ReCaptcha');

/* Text displayed after notify checkbox */
define('CMTX_TEXT_NOTIFY', 'Информирай ме за нови коментари по имейл.');

/* Text displayed after remember checkbox */
define('CMTX_TEXT_REMEMBER', 'Запомни детайлите ми на този компютър.');

/* Text displayed after privacy checkbox */
define('CMTX_TEXT_PRIVACY', 'Прочетох и разбрах <a href="' . cmtx_comments_folder() . 'agreement/bulgarian/privacy_policy.html" class="cmtx_privacy_link" title="Разгледай Условията за защита на личните данни" target="_blank" rel="nofollow">Условията за защита на личните данни</a>.');

/* Text displayed after terms checkbox */
define('CMTX_TEXT_TERMS', 'Прочетох и се съгласявам с <a href="' . cmtx_comments_folder() . 'agreement/bulgarian/terms_and_conditions.html" class="cmtx_terms_link" title="Разгледай другите условия" target="_blank" rel="nofollow">другите условия</a>.');

/* Text for form submit button */
define('CMTX_SUBMIT_BUTTON', 'Добави коментар');

/* Text for form preview button */
define('CMTX_PREVIEW_BUTTON', 'Прегледай');

/* Text for form buttons when processing */
define('CMTX_PROCESSING_BUTTON', 'Моля изчакайте..');

/* Text for 'powered by' statement */
define('CMTX_POWERED_BY', 'Осъществено от');

?>