<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp-plugin');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '8KXby52yYQF3lU8z');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'woI vp9-*NuJj#Y08l$*XZ/]A>jBoJb+wv@*xj.W9-NEuud#ja,.m;7N6)93+z+l');
define('SECURE_AUTH_KEY', 'l4.wJ}6];zB8z&SAVil|^4$e2Jb>,g&d-Rx4RmR#ETS-$PPjVXEeB}q9rOdO@X!!');
define('LOGGED_IN_KEY', 'q64dB8UQoND#/Xzi}*C0R&!bU8{)O4_(aW}27(_b<D6YAi>1q.mvHqy)3f1{f$ff');
define('NONCE_KEY', 'bL4czn<_suo+m$V5Z^xR){f_Y5+jKRg&le?;xYp#B=hJ%D|uvg;MVs;jlIS0`WB}');
define('AUTH_SALT', 'e)2]Jrn;b#.3{a[C;%JLM6Vx-e^T7/xHMX%57,Y2^VdNbS.0s]&9jFS5g#`XLaH`');
define('SECURE_AUTH_SALT', '9jx:ThXxjG4OV@p ]To3Rl>U*G(?7?>RI)w<YLo~*EJScbtT|sfl`;jwX7!hl/cq');
define('LOGGED_IN_SALT', 'eJpbRBXNllbvwpF_kjUeF+HnIgW1eC#,sl*x1-B 6B1|C&uxfNn4SN~cb J]J&i$');
define('NONCE_SALT', ',:@1uy!_gI0 6OqFIl:v &/=k?vrG`z<?imQN^/umK]`;j4c2Fs5JeM.ec>Y4xU8');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

