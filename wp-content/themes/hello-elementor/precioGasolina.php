<?php

$place_id_gasolineria = $_GET['5858'];
// Obtenemos los precios y los asignamos por cada lugar
$prices = new SimpleXMLElement('https://publicacionexterna.azurewebsites.net/publicaciones/prices', NULL, TRUE);
$json_precios = array(
    'regular' => 'sin registro',
    'premium' => 'sin registro',
    'diesel' => 'sin registro'
);
$precios = array();
foreach ($prices->place as $place) {
    if ($place['place_id'] == $place_id_gasolineria) {
        foreach ($place->gas_price as $price) {
            $tipo_gas = (string) $price['type'];
            $precio = (float) $price;
            $precios[$tipo_gas] = $precio;
        }
        break; 
    }
}
if (count($precios) > 0) {
    echo json_encode($precios, true);
} else {
    echo json_encode($json_precios, true);
}
