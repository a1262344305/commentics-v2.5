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
define('CMTX_FORM_HEADING', 'Написать отзыв');

/* Form disabled messages */
define('CMTX_ALL_FORMS_DISABLED', 'Добавление коментариев запрещено.');
define('CMTX_THIS_FORM_DISABLED', 'Добавление коментариев к данной странице запрещено.');

/* Open form link */
define('CMTX_OPEN_FORM', 'Открыть форму');

/* JavaScript disabled message */
define('CMTX_JAVASCRIPT_DISABLED', 'JavaScript должен быть включен.');

/* Reply */
define('CMTX_REPLY_MESSAGE', 'Вы отвечаете на');
define('CMTX_REPLY_CANCEL', '[отмена]');
define('CMTX_REPLY_NOBODY', 'Вы не ответили никому.');

/* Required */
define('CMTX_REQUIRED_SYMBOL', '*');
define('CMTX_REQUIRED_SYMBOL_MESSAGE', CMTX_REQUIRED_SYMBOL . ' Обязательные поля');

/* Field labels */
define('CMTX_LABEL_NAME', 'Имя:');
define('CMTX_LABEL_EMAIL', 'Email:');
define('CMTX_LABEL_WEBSITE', 'Сайт:');
define('CMTX_LABEL_TOWN', 'Откуда Вы:');
define('CMTX_LABEL_COUNTRY', 'Страна:');
define('CMTX_LABEL_RATING', 'Оценка:');
define('CMTX_LABEL_COMMENT', 'Отзыв:');
define('CMTX_LABEL_QUESTION', 'Вопрос:');
define('CMTX_LABEL_CAPTCHA', 'Kапчи:');

/* Field titles */
define('CMTX_TITLE_NAME', 'Введите имя');
define('CMTX_TITLE_EMAIL', 'Введите email адрес');
define('CMTX_TITLE_WEBSITE', 'Введите website адрес');
define('CMTX_TITLE_TOWN', 'Введите город');
define('CMTX_TITLE_COMMENT', 'Введите отзыв');
define('CMTX_TITLE_QUESTION', 'Введите ответ на вопрос');
define('CMTX_TITLE_NOTIFY', 'Получать уведомления на почту');
define('CMTX_TITLE_REMEMBER', 'Запомнить входа форме');
define('CMTX_TITLE_PRIVACY', 'Соглашаюсь с условиями');
define('CMTX_TITLE_TERMS', 'Согласиться с условиями');
define('CMTX_TITLE_SUBMIT', 'Добавить отзыв');
define('CMTX_TITLE_PREVIEW', 'Предпросмотр');

/* Field placeholders */
define('CMTX_PLACEHOLDER_NAME', '');
define('CMTX_PLACEHOLDER_EMAIL', '');
define('CMTX_PLACEHOLDER_WEBSITE', '');
define('CMTX_PLACEHOLDER_TOWN', '');
define('CMTX_PLACEHOLDER_COMMENT', '');
define('CMTX_PLACEHOLDER_QUESTION', '');
define('CMTX_PLACEHOLDER_CAPTCHA', '');

/* Note displayed after email field */
define('CMTX_NOTE_EMAIL', '(не для публикации)');

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
define('CMTX_TEXT_QUESTION', 'Введите ответ:');

/* Text displayed for Securimage captcha */
define('CMTX_TEXT_SECURIMAGE', 'Enter code:');
define('CMTX_TITLE_SECURIMAGE', 'Enter code from image');
define('CMTX_TITLE_SECURIMAGE_AUDIO', 'Audio');
define('CMTX_TITLE_SECURIMAGE_REFRESH', 'Refresh');

/* Text displayed if ReCaptcha key missing */
define('CMTX_RECAPTCHA_NO_KEY', 'API key(s) missing in ReCaptcha admin page');

/* Text displayed after notify checkbox */
define('CMTX_TEXT_NOTIFY', 'Уведомлеть о новых коментариях по почте.');

/* Text displayed after remember checkbox */
define('CMTX_TEXT_REMEMBER', 'Запомнить данные формы на этом компьютере.');

/* Text displayed after privacy checkbox */
define('CMTX_TEXT_PRIVACY', 'Я прочитал и согласен с  <a href="' . cmtx_commentics_url() . 'agreement/russian/privacy_policy.html" class="cmtx_privacy_link" title="политикой конфеденциальности" target="_blank" rel="nofollow">политикой конфеденциальности</a>.');

/* Text displayed after terms checkbox */
define('CMTX_TEXT_TERMS', 'Я прочитал и согласен с  <a href="' . cmtx_commentics_url() . 'agreement/russian/terms_and_conditions.html" class="cmtx_terms_link" title="View terms and conditions" target="_blank" rel="nofollow">пользовательским соглашением</a>.');

/* Text for form submit button */
define('CMTX_SUBMIT_BUTTON', 'Добавить комментарий');

/* Text for form preview button */
define('CMTX_PREVIEW_BUTTON', 'Предпросмотр');

/* Text for form buttons when processing */
define('CMTX_PROCESSING_BUTTON', 'Подождите..');

/* Text for 'powered by' statement */
define('CMTX_POWERED_BY', 'Работает на');

?>