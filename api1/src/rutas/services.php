<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

include '../src/rutas/general_information.php';
include '../src/rutas/selection_mode.php';
include '../src/rutas/unspsc.php';
include '../src/rutas/plan_indicativo.php';
include '../src/rutas/plan_anual.php';
include '../src/rutas/plan_accion.php';
include '../src/rutas/activities_plan.php';
include '../src/rutas/define_accounting_periods.php';