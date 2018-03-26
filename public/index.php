<?php

use Framework\Http\Request;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';
//require 'src/Framework/Http/Request.php';


function getLang(array $get, array $cookie, array $session, array $server, $default) {
    return
        !empty($get['lang']) ? $get['lang'] :
            (!empty($cookie['lang']) ? $cookie['lang'] :
                 (!empty($session['lang']) ? $session['lang'] :
                     (!empty($server['HTTP_ACCEPT_LANGUAGE']) ?substr($server['HTTP_ACCEPT_LANGUAGE'], 0, 2) :
                       $default)));
}
session_start();

$name = $_GET['name'] ?? 'Guest';
$lang = getLang($_GET, $_COOKIE, $_SESSION, $_SERVER,'en');

### Initialization

$request = new Request();

### Action

$name = $request->getQueryParams()['name'] ?? 'Guest';
header('Bvdv:github');
echo "Hi " . $name . "! Your lang is " . $lang;