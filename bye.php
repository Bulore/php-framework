<?php
/**
 * Created by PhpStorm.
 * User: Vic
 * Date: 16.02.2019
 * Time: 20:37
 */

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$response = new Response('Goodbye!');
$response->send();