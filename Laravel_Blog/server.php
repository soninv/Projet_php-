<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Ce fichier nous permet d'émuler la fonctionnalité "mod_rewrite" d'Apache à partir du
// serveur Web PHP intégré. Cela fournit un moyen pratique de tester un Laravel
// application sans avoir installé un "vrai" logiciel de serveur Web ici.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
