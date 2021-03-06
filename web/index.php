<?php
/**
 * Created by PhpStorm.
 * User: Vic
 * Date: 16.02.2019
 * Time: 20:41
 */

require_once '../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

$map = [
    '/hello' => '../src/pages/hello.php',
    '/bye'   => '../src/pages/bye.php',
];

$path = $request->getPathInfo();
if (isset($map[$path])) {
    ob_start();
    include $map[$path];
    $response->setContent(ob_get_clean());
} else {
    $response->setStatusCode(404);
    $response->setContent('Not Found');
}

$response->send();