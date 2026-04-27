<?php
/**
 * Configuration globale du portfolio
 */

// Configuration du serveur
define('BASE_URL', isset($_SERVER['HTTPS']) ? 'https://' : 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']));
define('PROJECT_ROOT', __DIR__);

// Configuration email
define('CONTACT_EMAIL', 'gracemakeu26@gmail.com');
define('ADMIN_EMAIL', 'gracemakeu26@gmail.com');

// Configuration de la base de données (optionnel)
// define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
// define('DB_USER', getenv('DB_USER') ?: 'root');
// define('DB_PASS', getenv('DB_PASS') ?: '');
// define('DB_NAME', getenv('DB_NAME') ?: 'portfolio');

// Activation du rapport d'erreurs en développement
if (getenv('ENVIRONMENT') === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(E_ALL);
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
}

// Fuseau horaire
date_default_timezone_set('Africa/Douala');
?>
