<?php

require_once("resources/functions.php");

// turn on output buffering
ob_start();

// turn on sessions
session_start();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

// directory constants
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

// database constants
defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASSWORD") ? null : define("DB_PASSWORD", "");
defined("DB_NAME") ? null : define("DB_NAME", "steveswoodwork");

//$connecton = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

?>