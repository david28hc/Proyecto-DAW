<?php
//único punto de entrada a nuestra web
header('Content-Type: text/html; charset=utf-8');

require 'classes/AutoLoad.php';

//echo 'index.php<br>';

// $ruta = Request::read("ruta");
// $accion = Request::read("accion");

$accion = '';
$ruta = '';
$urlParams = Request::read('urlparams');
$parametros = explode('/', $urlParams);
if(isset($parametros[0])) {
    $ruta = $parametros[0];
} else {
    $ruta = Request::read("ruta");
}
if(isset($parametros[1])) {
    $accion = $parametros[1];
} else {
    $accion = Request::read("accion");
}

$frontController = new ControladorFrontal($ruta);

$frontController->doAction($accion);
echo $frontController->doOutput($accion);