<?php


use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\SapiEmitter;
use Zend\Diactoros\ServerRequestFactory;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

### Initialization

$request = ServerRequestFactory::fromGlobals();


### Action

$path = $request->getUri()->getPath();
if ($path === '/') {
    $name = $request->getQueryParams()['name'] ?? 'Guest';
    $response = new HtmlResponse('Hi, ' . $name . '!');
} elseif ($path === '/about') {
    $response = new HtmlResponse('About Us');
} else {
    $response = new HtmlResponse('Page not Found', 404);
}

### Postprocessing


$response = $response->withHeader('Bvdv', 'GitHub');

###Sending

$emitter = new SapiEmitter();
$emitter->emit($response);
