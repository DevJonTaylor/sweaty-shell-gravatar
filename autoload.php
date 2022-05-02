<?php
/**
 * @
 */

include_once __DIR__ . DIRECTORY_SEPARATOR . 'defines.php';

function autoloadClass($class, $prefix, $src) {
    $len = strlen($prefix);

    if(strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);

    $file = $src . str_replace('\\', DIRECTORY_SEPARATOR, $relativeClass) . '.php';

    if(file_exists($file)) {
        include_once($file);
    }
}

spl_autoload_register(function($class) {
    foreach(AUTO_DIR as $prefix => $src) {
        autoloadClass($class, $prefix, $src);
    }
});

