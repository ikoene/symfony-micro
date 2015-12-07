<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

$loader = require __DIR__.'/../config/autoload.php';
require_once __DIR__.'/../MicroKernel.php';

Debug::enable();

$kernel = new MicroKernel('dev', true);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
