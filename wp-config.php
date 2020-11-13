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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'cars' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>6SS_ DguJ~}+<S4%MtHdT?;&Y-(d=!<VgND@90,<O/A0.EYRW$M(9@+oF| x[rV' );
define( 'SECURE_AUTH_KEY',  'O7j.-sRQm7#!TV$Oz!X`O1:42tI6b9gjj*T+8~MNLCse1VCWjWNsGBaBvs[#?xN:' );
define( 'LOGGED_IN_KEY',    'Ao$mnINo4.M=_5A^WX)$Sn 4!$G#Pcj4)cxmw8OAFA[IB9r0fB|sB(b{h[QL`(05' );
define( 'NONCE_KEY',        '=QZC&PN;Pi5H(jcIvBI CdRhPN.7CWQa!=U,;6ZC,k<0nZmR0q=h*dVCncQnZak ' );
define( 'AUTH_SALT',        'F,B0}` S>)fLP*9!#jNNM/&Hp>?9aV{o`}4s<yLrWr2jl>erbT<3TpN2O.!TExz+' );
define( 'SECURE_AUTH_SALT', 'piPttz[ni?xYGA]I#<*&=pI]G`w_Q>ma7jt;zNdbbGHmmEsGs6a:Q+aka!0h$G(s' );
define( 'LOGGED_IN_SALT',   '22g):aTNoPI<@>T,iumBP8PYS|&{bv]p@bPz|Y,i^1LNYb}@^WB6fORPGlZ#8!*|' );
define( 'NONCE_SALT',       '#L->Lkpg<RAG<j+]Q?D(rQks.b:R+bT=22nk)gD,M(:xPW[NIG3G;9;:vb-}k}9q' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
