<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'lagmoss_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'lagmoss_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'fXEuWv2z.5hwe6w' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CF{y;HRF2Y^|LfEQhXd#O5=vn-*xXNQSn-{z|N&UTDPc_PV)4||jb&uB1I9yQ${}' );
define( 'SECURE_AUTH_KEY',  'MY0`FvN9f($u!!mpB+S=y9Mb,0MivZ_v28.<aeo6b/V|fqf0.H]X.qLB~<s5?N.i' );
define( 'LOGGED_IN_KEY',    'IT^Zvf:FuI$-<1x[`Poa)g4R)e(b.{-yfw2<(V10S`UPLzv)`FQAxA{--S/y=W{s' );
define( 'NONCE_KEY',        ')b3/xn,BI-gw;J3R(B=AjmzjfVyP-)]a|_d>m=0=Tyf!q-%mobc2Isky&ZB/C*[h' );
define( 'AUTH_SALT',        '}Y;0e7)^.V0w3,F|s:@3i.De|jDRu39?HMkaB `_s/`)G7X$~}5Kp^li]+gExn~~' );
define( 'SECURE_AUTH_SALT', 'JvWD;sj2p6iXSV@!CQYfPz1:,qTPBKvc|5N!H{,H~&T>R*9g;B^*`XOI/=kPk?wT' );
define( 'LOGGED_IN_SALT',   'c }jL;:aw~g#tK{+W#WOPdN`=</9,uWvUvxA{YBHbE$RANvRH; ,=my$0uQqq6qK' );
define( 'NONCE_SALT',       'x#Q]!e.Zac&~Hs8lKZ;k,ASM$Xr]^a:3YX:0.$0-luQUKYL XB_MN@<J@$LEt/:*' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
* Язык локализации WordPress, по умолчанию английский.
*
* Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
* для выбранного языка должен быть установлен в wp-content/languages. Например,
* чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
* и присвойте WPLANG значение 'ru_RU'.
*/
define('WPLANG', 'ru_RU');

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
