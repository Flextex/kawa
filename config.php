<?php
// Array of the files with an unique ID
$files = array(
    'UID12345' => array(
        'content_type' => 'application/zip', 
        'suggested_name' => 'codex-file.zip', 
        'file_path' => 'files/test.zip',
        'type' => 'local_file'
    ),
    'UID67890' => array(
        'content_type' => 'audio/mpeg', 
        'suggested_name' => 'music-codex.mp3', 
        'file_path' => 'http://www.appcreator24.com/apk/app727847.apk?v=20',
        'type' => 'remote_file'
    ),
);

// Base URL of the application
define('BASE_URL','http://'. $_SERVER['HTTP_HOST'].'/');

// Path of the download.php file
define('DOWNLOAD_PATH', BASE_URL.'download.php');

// Path of the token directory to store keys
define('TOKEN_DIR', 'tokens');

// Authentication password to generate download links
define('OAUTH_PASSWORD','NOPROG');

// Expiration time of the link (examples: +1 year, +1 month, +5 days, +10 hours)
define('EXPIRATION_TIME', '+1 minutes');