<?php

require_once '../../modelo/satelite.php';
require_once '../../modelo/operador.php';
require_once 'consultarResponse.php';
header('Content-Type: application/json');

$resp = new ConsultarResponse();

$o=new Operador();
$o->Nombre = 'ARSAT';
$o->TipoEmpresa = 'Publica';
$o->FormaLegal = 'Sociedad Anónima';

$IdSatelite = $_GET['id'];
$s = new Satelite();
$s->Id=$IdSatelite;
$s->Nombre='Arsat-1';
$s->Operador=$o;
$s->TipoMision='Comunicaciones';
$s->DuracionEnAnios=15;

$resp->Satelite = $s;

echo json_encode($resp);
