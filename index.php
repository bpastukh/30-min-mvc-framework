<?php
require_once 'model.php';
require_once 'controllers.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ('/' === $uri) {
    list_action();
    return;
}

if ('/show.php' === $uri) {
    show_action();
    return;
}

not_found();
