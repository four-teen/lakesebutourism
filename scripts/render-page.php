<?php

if ($argc < 2) {
    fwrite(STDERR, "Usage: php scripts/render-page.php <entry> [query]\n");
    exit(1);
}

$root = dirname(__DIR__);
$entry = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $argv[1]);
$target = realpath($root . DIRECTORY_SEPARATOR . $entry);

if ($target === false || strpos($target, $root) !== 0 || !is_file($target)) {
    fwrite(STDERR, "Invalid entry file.\n");
    exit(1);
}

$_GET = array();
if (!empty($argv[2])) {
    parse_str($argv[2], $_GET);
}

$_SERVER['REQUEST_METHOD'] = 'GET';
$_SERVER['SCRIPT_NAME'] = '/' . str_replace(DIRECTORY_SEPARATOR, '/', $entry);
$_SERVER['PHP_SELF'] = $_SERVER['SCRIPT_NAME'];

chdir($root);
require $target;
