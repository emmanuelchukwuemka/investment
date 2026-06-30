<?php

/**
 * NexVault Capital – Root entry point for XAMPP
 * Forwards all requests into the Laravel application.
 */

// Resolve the Laravel public directory
$laravelPublic = __DIR__ . '/laravel/public';

// Pass any query string through
$_SERVER['SCRIPT_FILENAME'] = $laravelPublic . '/index.php';
$_SERVER['SCRIPT_NAME']     = '/investment/laravel/public/index.php';

// Change working directory so relative paths inside Laravel resolve correctly
chdir($laravelPublic);

require $laravelPublic . '/index.php';
