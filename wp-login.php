<!DOCTYPE html>
<html lang="ru-RU">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Войти &lsaquo; TestTask &#8212; WordPress</title>
	<meta name="robots" content="noindex, nofollow, noarchive">
<link rel="stylesheet" id="dashicons-css" href="http://m1ja.github.io/TestTask/wp-includes/css/dashicons.min.css?ver=6.2.2" media="all">
<link rel="stylesheet" id="buttons-css" href="http://m1ja.github.io/TestTask/wp-includes/css/buttons.min.css?ver=6.2.2" media="all">
<link rel="stylesheet" id="forms-css" href="http://m1ja.github.io/TestTask/wp-admin/css/forms.min.css?ver=6.2.2" media="all">
<link rel="stylesheet" id="l10n-css" href="http://m1ja.github.io/TestTask/wp-admin/css/l10n.min.css?ver=6.2.2" media="all">
<link rel="stylesheet" id="login-css" href="http://m1ja.github.io/TestTask/wp-admin/css/login.min.css?ver=6.2.2" media="all">
	<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="viewport" content="width=device-width">
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-ru-ru">
	<script type="text/javascript">document.body.className = document.body.className.replace('no-js','js');</script>
		<div id="login">
		<h1><a href="https://ru.wordpress.org/">Сайт работает на WordPress</a></h1>
	
		<form name="loginform" id="loginform" action="http://localhost/TestTask/wp-login.php" method="post">
			<p>
				<label for="user_login">Имя пользователя или email</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" autocomplete="username">
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Пароль</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" autocomplete="current-password" spellcheck="false">
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Показать пароль">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">Запомнить меня</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Войти">
									<input type="hidden" name="redirect_to" value="http://localhost/TestTask/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
			</p>
		</form>

					<p id="nav">
				<a href="http://m1ja.github.io/TestTask/wp-login.php?action=lostpassword">Забыли пароль?</a>			</p>
					<script type="text/javascript">function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }</script>
				<p id="backtoblog">
			<a href="http://m1ja.github.io/TestTask/">&larr; Перейти к TestTask</a>		</p>
			</div>
				<div class="language-switcher">
				<form id="language-switcher" action="" method="get">

					<label for="language-switcher-locales">
						<span class="dashicons dashicons-translation" aria-hidden="true"></span>
						<span class="screen-reader-text">
							Язык						</span>
					</label>

					<select name="wp_lang" id="language-switcher-locales"><option value="en_US" lang="en" data-installed="1">English (United States)</option>
<option value="ru_RU" lang="ru" selected data-installed="1">Русский</option></select>
					
					
					
						<input type="submit" class="button" value="Изменить">

					</form>
				</div>
				<script src="http://m1ja.github.io/TestTask/wp-includes/js/jquery/jquery.min.js?ver=3.6.4" id="jquery-core-js"></script>
<script src="http://m1ja.github.io/TestTask/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0" id="jquery-migrate-js"></script>
<script id="zxcvbn-async-js-extra">var _zxcvbnSettings = {"src":"http:\/\/m1ja.github.io\/TestTask\/wp-includes\/js\/zxcvbn.min.js"};</script>
<script src="http://m1ja.github.io/TestTask/wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
<script src="http://m1ja.github.io/TestTask/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2" id="wp-polyfill-inert-js"></script>
<script src="http://m1ja.github.io/TestTask/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11" id="regenerator-runtime-js"></script>
<script src="http://m1ja.github.io/TestTask/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0" id="wp-polyfill-js"></script>
<script src="http://m1ja.github.io/TestTask/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5" id="wp-hooks-js"></script>
<script src="http://m1ja.github.io/TestTask/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text directionltr': [ 'ltr' ] } );
</script>
<script id="password-strength-meter-js-extra">var pwsL10n = {"unknown":"Надёжность пароля неизвестна","short":"Очень слабый","bad":"Слабый","good":"Средний","strong":"Надёжный","mismatch":"Несовпадение"};</script>
<script id="password-strength-meter-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2023-05-04 09:31:17+0000","generator":"GlotPress\/4.0.0-alpha.4","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=3; plural=(n % 10 == 1 && n % 100 != 11) ? 0 : ((n % 10 >= 2 && n % 10 <= 4 && (n % 100 < 12 || n % 100 > 14)) ? 1 : 2);","lang":"ru"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["%1$s устарела с версии %2$s! Вместо неё используйте %3$s. Пожалуйста, рассмотрите возможность написания более инклюзивного кода."]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );</script>
<script src="http://m1ja.github.io/TestTask/wp-admin/js/password-strength-meter.min.js?ver=6.2.2" id="password-strength-meter-js"></script>
<script src="http://m1ja.github.io/TestTask/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
<script id="wp-util-js-extra">var _wpUtilSettings = {"ajax":{"url":"\/TestTask\/wp-admin\/admin-ajax.php"}};</script>
<script src="http://m1ja.github.io/TestTask/wp-includes/js/wp-util.min.js?ver=6.2.2" id="wp-util-js"></script>
<script id="user-profile-js-extra">var userProfileL10n = {"user_id":"0","nonce":"9fa9cf7681"};</script>
<script id="user-profile-js-translations">( function( domain, translations ) {
	var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
	localeData[""].domain = domain;
	wp.i18n.setLocaleData( localeData, domain );
} )( "default", {"translation-revision-date":"2023-05-04 09:31:17+0000","generator":"GlotPress\/4.0.0-alpha.4","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=3; plural=(n % 10 == 1 && n % 100 != 11) ? 0 : ((n % 10 >= 2 && n % 10 <= 4 && (n % 100 < 12 || n % 100 > 14)) ? 1 : 2);","lang":"ru"},"Your new password has not been saved.":["Ваш новый пароль не был сохранён."],"Hide":["Скрыть"],"Show":["Показать"],"Confirm use of weak password":["Разрешить использование слабого пароля."],"Hide password":["Скрыть пароль"],"Show password":["Показать пароль"]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );</script>
<script src="http://m1ja.github.io/TestTask/wp-admin/js/user-profile.min.js?ver=6.2.2" id="user-profile-js"></script>
	<div class="clear"></div>
	</body>
	</html>