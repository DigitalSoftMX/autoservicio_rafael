<?php
    
    $place_id_gasolineria = $_GET['5858'];
    /* Obtenemos los precios y los asignamos por cada lugar */
    $prices = new SimpleXMLElement('https://publicacionexterna.azurewebsites.net/publicaciones/prices', NULL, TRUE);

    $json_precios = array(
        'regular' => 'sin registro',
        'premium' => 'sin registro',
        'diesel' => 'sin registro'
    );

    foreach($prices->place as $place)
    {
        $place_id = 0;

        // obtenemos el place_id
        foreach($place->attributes() as $_place_id => $value)
        {
            $place_id =  $value;
            settype($place_id, 'int'); 
        }

        if( $place_id_gasolineria == $place_id )
        {
            // le asignamos los precios del gas
            foreach( $place->gas_price as $price )
            {
                $tipo_gas = (string) $price['type'];
                $precio = (float) $price;

                switch($tipo_gas)
                {
                    case 'regular':
                        $json_precios['regular'] = "$".$precio;
                        break;
                    case 'premium':
                        $json_precios['premium'] = "$".$precio;
                        break;
                    case 'diesel':
                        $json_precios['diesel'] = "$".$precio;
                        break;
                }
            }
        }


    }

?>