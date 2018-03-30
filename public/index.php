<?php

use Framework\Http\RequestFactory;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

### Initialization

$request = RequestFactory::fromGlobals();

### Action

$name = $request->getQueryParams()['name'] ?? 'Guest';
header('Bvdv:github');
echo "Hi " . $name . "!";
//echo "Hi " . $name . "! Your lang is " . $lang;