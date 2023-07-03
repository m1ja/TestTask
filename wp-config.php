<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'testtask' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1(cR%,wQ1S:ZtwD%C^H=#%H!|RNh5h{*ZaJ}B2m30Su@s~mI3cCF$90W_7]!!sw{' );
define( 'SECURE_AUTH_KEY',  'xZEe]DoIL@j%O/hLGgw2YTr( w@kbB)=!RiJ:H<k$//}Jw&{@cEhur}?@;#Y?O`t' );
define( 'LOGGED_IN_KEY',    '>3`uKcJ%EC34)Xcdw{QIajuMqQMhMtykZIUDefDv$FZ8c)mytQW<o|&L}p;1g$#8' );
define( 'NONCE_KEY',        'V!yJA^K{UDo2J#7vw&fwdM-WF5sWL||0rhXm<M/$jE#g^:hGBRMUg@Nx.MyMWVw.' );
define( 'AUTH_SALT',        'uDidz[~;G>10{E= 1@w_VH}`W*XWx:Tdk+NTFu]Fu>8VZ~|e@I~^a5N4L?eA3su0' );
define( 'SECURE_AUTH_SALT', ':>KJ/W$,[v`y7fZr/Z+>+%~CA7|t*KVt8P)mK@X~-P-aIF!8=MQvqmhpWY~/H,]M' );
define( 'LOGGED_IN_SALT',   '^a&aof`V``F2I4HC|[*eD`WUzk4>m%]DrTtfaW38.oN1Tk)Bfl^}&1;tkEC4sttn' );
define( 'NONCE_SALT',       'yccX2SA!1dNf1Z~g({%e!gU_XU2qvz%T;@<n8zf5_1Yz9REYF/9Hm(zdU`$C<l*J' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
