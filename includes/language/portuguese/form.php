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
define('CMTX_FORM_HEADING', 'Adicionar Comentário');

/* Form disabled messages */
define('CMTX_ALL_FORMS_DISABLED', 'A função de adicionar comentários está desabilitado.');
define('CMTX_THIS_FORM_DISABLED', 'A função de adicionar comentários está desabilitado para esta página.');

/* Open form link */
define('CMTX_OPEN_FORM', 'Apresentar o Formulário');

/* JavaScript disabled message */
define('CMTX_JAVASCRIPT_DISABLED', 'JavaScript deve ser habilitado para certas características funcionarem.');

/* Reply */
define('CMTX_REPLY_MESSAGE', 'você está respondendo para');
define('CMTX_REPLY_CANCEL', '[cancelar]');
define('CMTX_REPLY_NOBODY', 'Você não está respondendo para ninguém.');

/* Required */
define('CMTX_REQUIRED_SYMBOL', '*');
define('CMTX_REQUIRED_SYMBOL_MESSAGE', CMTX_REQUIRED_SYMBOL . ' Informação requerida');

/* Field labels */
define('CMTX_LABEL_NAME', 'Nome:');
define('CMTX_LABEL_EMAIL', 'Email:');
define('CMTX_LABEL_WEBSITE', 'Website:');
define('CMTX_LABEL_TOWN', 'Cidade:');
define('CMTX_LABEL_COUNTRY', 'País:');
define('CMTX_LABEL_RATING', 'Avaliação:');
define('CMTX_LABEL_COMMENT', 'Comentário:');
define('CMTX_LABEL_QUESTION', 'Pergunta:');
define('CMTX_LABEL_CAPTCHA', 'Captcha:');

/* Field titles */
define('CMTX_TITLE_NAME', 'Digite seu nome');
define('CMTX_TITLE_EMAIL', 'Digite seu email');
define('CMTX_TITLE_WEBSITE', 'Digite seu website');
define('CMTX_TITLE_TOWN', 'Digite sua cidade');
define('CMTX_TITLE_COMMENT', 'Digite seu comentário');
define('CMTX_TITLE_QUESTION', 'Digite a resposta para a pergunta');
define('CMTX_TITLE_NOTIFY', 'Receber emails de notificação');
define('CMTX_TITLE_REMEMBER', 'Lembre-se de entradas do meu formulário');
define('CMTX_TITLE_PRIVACY', 'Concordar com a política de privacidade');
define('CMTX_TITLE_TERMS', 'Concordar com os Termos e Condições');
define('CMTX_TITLE_SUBMIT', 'Adicionar Comentários');
define('CMTX_TITLE_PREVIEW', 'Visualizar');

/* Note displayed after email field */
define('CMTX_NOTE_EMAIL', '(não será publicado)');

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
define('CMTX_TEXT_QUESTION', 'Digite a resposta:');

/* Text displayed for Securimage captcha */
define('CMTX_TEXT_SECURIMAGE', 'Enter code:');
define('CMTX_TITLE_SECURIMAGE', 'Enter code from image');
define('CMTX_TITLE_SECURIMAGE_AUDIO', 'Audio');
define('CMTX_TITLE_SECURIMAGE_REFRESH', 'Refresh');

/* Text displayed if ReCaptcha key missing */
define('CMTX_RECAPTCHA_NO_KEY', 'API key(s) missing in ReCaptcha admin page');

/* Text displayed after notify checkbox */
define('CMTX_TEXT_NOTIFY', 'Notifique-me de novos comentários via email.');

/* Text displayed after remember checkbox */
define('CMTX_TEXT_REMEMBER', 'Lembrar minhas informações neste computador.');

/* Text displayed after privacy checkbox */
define('CMTX_TEXT_PRIVACY', 'Eu li e entendo a <a href="' . cmtx_comments_folder() . 'agreement/portuguese/privacy_policy.html" class="cmtx_privacy_link" title="Ver política de privacidade" target="_blank" rel="nofollow">política de privacidade</a>.');

/* Text displayed after terms checkbox */
define('CMTX_TEXT_TERMS', 'eu li e concordo com os <a href="' . cmtx_comments_folder() . 'agreement/portuguese/terms_and_conditions.html" class="cmtx_terms_link" title="Ver termos e condições" target="_blank" rel="nofollow">temos e condições</a>.');

/* Text for form submit button */
define('CMTX_SUBMIT_BUTTON', 'Adicionar comentário');

/* Text for form preview button */
define('CMTX_PREVIEW_BUTTON', 'Visualizar');

/* Text for form buttons when processing */
define('CMTX_PROCESSING_BUTTON', 'Por favor aguarde..');

/* Text for 'powered by' statement */
define('CMTX_POWERED_BY', 'Powered by');

?>