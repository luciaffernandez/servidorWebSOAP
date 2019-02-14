<?php
$uri = "localhost/servidorWebSOAP/";
$server = new SoapServer(null, ['uri' => $uri]);
$server = addFunction("sumar");
$server = addFunction("restar");
$server->handle();

function sumar($a, $b){
    return "Servicio Lucia Sumar". ($a + $b);
}
function restar($a, $b){
    return "Servicio Lucia Restar". ($a - $b);
}
?>