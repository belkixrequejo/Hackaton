<?php
//variables para validar
$Nombre = array();
$Apellidos = array();
$Dirección = array();
$CódigoPostal = array();
$Pais = array();
$NTelefono = array();
$Edad = array();
$FNacimiento = array();

$Sexo = array();
$NCBancaria = array();
$LConducir = array();
$NPasaporte = array();
$NTIdentificacion = array();
$NTCredito = array();


$data = file_get_contents("data/input.json");
$information = json_decode($data, true);

foreach ($information as $information) {
    echo '<pre>';
    print_r($information);
    echo '</pre>';
}

?>