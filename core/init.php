<?php
error_reporting(E_ALL ^ E_NOTICE);

if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
}



spl_autoload_register(function($class) {
    require_once 'classes/' . $class . '.php';
});

require_once 'functions/sanitize.php';
