<?php

use Symfony\Component\HttpFoundation\Request;

$loader = require __DIR__.'/../config/autoload.php';
require_once __DIR__.'/../MicroKernel.php';

$kernel = new MicroKernel('prod', false);
$kernel->loadClassCache();

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
