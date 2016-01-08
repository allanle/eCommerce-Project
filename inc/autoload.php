<?php
require_once('config.php');
function autoload($class_name) {
    $class = explode("_", $class_name);
    $path = implode("/", $class).".php";
    require_once($path);
}