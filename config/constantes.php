<?php
$envVariables = parse_ini_file('.env');

/**
 * URL base del sistema
 */
define('SERVERURL', $envVariables['APP_URL']);

/**
 * host de la base de datos
 */
define('DB_HOST', $envVariables['DB_HOST']);

/**
 * puerto de la base de datos
 */
define('DB_PORT',$envVariables['DB_PORT']);

/**
 * nombre de la base de datos
 */
define('DB_DATABASE',$envVariables['DB_DATABASE']);

/**
 * nombre de usuario de la base de datos
 */
define('DB_USERNAME',$envVariables['DB_USERNAME']);

/**
 *  contraseña de la base de datos
 */
define('DB_PASSWORD',$envVariables['DB_PASSWORD']);