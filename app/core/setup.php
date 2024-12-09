<?php

require '../app/models/Model.php';

// Fetch the environment variables from Heroku using getenv
$env = [
    'DB1NAME' => getenv('DB1NAME'),
    'DB1HOST' => getenv('DB1HOST'),
    'DB1PORT' => getenv('DB1PORT'),
    'DB1USER' => getenv('DB1USER'),
    'DB1PASS' => getenv('DB1PASS'),

    'DB2NAME' => getenv('DB2NAME'),
    'DB2HOST' => getenv('DB2HOST'),
    'DB2PORT' => getenv('DB2PORT'),
    'DB2USER' => getenv('DB2USER'),
    'DB2PASS' => getenv('DB2PASS'),

    'DB3NAME' => getenv('DB3NAME'),
    'DB3HOST' => getenv('DB3HOST'),
    'DB3PORT' => getenv('DB3PORT'),
    'DB3USER' => getenv('DB3USER'),
    'DB3PASS' => getenv('DB3PASS'),
];

if (!$env['DB1NAME'] || !$env['DB1HOST'] || !$env['DB1PORT'] || !$env['DB1USER'] || !$env['DB1PASS']) {
    die("Error: Missing environment variables.");
}

// Define constants for database connection
define('DB1NAME', $env['DB1NAME']);
define('DB1HOST', $env['DB1HOST']);
define('DB1PORT', $env['DB1PORT']);
define('DB1USER', $env['DB1USER']);
define('DB1PASS', $env['DB1PASS']);

define('DB2NAME', $env['DB2NAME']);
define('DB2HOST', $env['DB2HOST']);
define('DB2PORT', $env['DB2PORT']);
define('DB2USER', $env['DB2USER']);
define('DB2PASS', $env['DB2PASS']);

define('DB3NAME', $env['DB3NAME']);
define('DB3HOST', $env['DB3HOST']);
define('DB3PORT', $env['DB3PORT']);
define('DB3USER', $env['DB3USER']);
define('DB3PASS', $env['DB3PASS']);

define('DEBUG', true);

