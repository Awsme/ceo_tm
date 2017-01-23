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
define('DB_NAME', 'ceo_templatemonster');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'toor');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QirZ.X:L@H$%1zh1s%U!H?h&hfzYs =h&]?*==>t_h=SY7g|{zpopYDBE:}:x`e5');
define('SECURE_AUTH_KEY',  'n$oWn^wvTH[u9/0 0^Xc~$>1!gb>!N`e-(C$F!`Iqpz+Q!JF{t#lPe+HiWAzGuzB');
define('LOGGED_IN_KEY',    'LB3n9j}QJwRn&srK59q7AFdIcBL9.9j,3u4F|?f.Ag?q-nAwXNieL#N%_qmULnWK');
define('NONCE_KEY',        '2#z:?)]`BT|:M;pi@S9[PUKvCh<~WS*Z35w`d o:T5?rKj:u(IWJ=G>^w6WrE6Na');
define('AUTH_SALT',        '4Zb[s8#5p(?Lvppu(16 Wwo2*GK4QKvw!+3PY`s.fooanf5!>Q7hLQ9X W6Au322');
define('SECURE_AUTH_SALT', 'D|MHt$$%,pp+`j(I bv42S.r!6?};]y+|~.]#7B9b7|U2`b<&i0z*%@~XDH`^@pd');
define('LOGGED_IN_SALT',   'A7W#,CH0L/:)9e/;2eZL~l=rnd7}*.w1c%E{1@q%:C[EmqQb9k}Ww5[.jLW.r<j^');
define('NONCE_SALT',       ')C_EW=21@=L}s}+bqbnODT#%#>.f/f%rkhT|T7kRo0ce*IyF;^&eL$OR];q6;S^a');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
