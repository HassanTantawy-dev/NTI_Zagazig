<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Hassan\Mvc\Request;
use Hassan\Mvc\App;

$request = new Request;
$app = new App($request);