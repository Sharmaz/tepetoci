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
define('DB_NAME', 'tepetoci');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'tepetoci');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Tepetoci45');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'f+9[U-vnTFr!ZFeu*uHBT[B)g-<:P+4&P3UfYE$>{vj_Q8UOjO40sPSW:58%<Fy8'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '@be5GMhzWXa@l~aH_3k~tRe`5qmU{$r&(vAWKI240Q+6xS}@=xz+QBE#.hNP)Nnn'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'I|2!u43)8`+vEo1IMd<6Ey37)Xxq>fk7RNKZe<fETRf0|5~y@0!ug@KzO-,I>U75'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '=SOu1-uFr1e2abs@ NyLWh|D=W0hlu;1Y]u~Z:TOSd]n<d{s$P{(6MiKhEMToIe.'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '{wA?[^Vd@7n-X3%`L1p,9`:)cBBs@+QUH/O(X5V19Z@-AvAqR+]SQl dD(9)1fDG'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'x,UDzQc~^M5$2[{<l|[*-Zi}`mO8o,W_ :s2M@>>j->B1=k_D$leTft12<a1Z~bk'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'Ey jRM?)f/|s7f TG6Otb*ckd>cQ(q`P,(JjPQr[Gf;;|QP?Z;-(9MjH~VBFJqmm'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'J`8bqgLeOnX)g6Q~7IEe?|ueGc/-U!{&`jW-MRX&ai0R%x*`U>9?4r]xkj>{jx*.'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

define('FS_METHOD', 'direct');
