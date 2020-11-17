
let place_id;
let url = 'http://autoserviciorc.com/wp-content/themes/hello-elementor/precioGasolina.php';

function obtenerPrecios(place_id_)
{
    place_id = place_id_;
    fetch(url+"?place_id="+place_id)
    .then((resp) => resp.json())
    .then(function(data) {
        document.getElementById('regular_precio').innerHTML = "Magna "+data.regular;
        document.getElementById('premium_precio').innerHTML = "Premium "+data.premium;
        document.getElementById('diesel_precio').innerHTML = "Diésel "+data.diesel;
    })
    .catch(error => console.error(error));
}

function recargarPrecios()
{
    fetch(url+"?place_id="+place_id)
    .then((resp) => resp.json())
    .then(function(data) {
        document.getElementById('regular_precio').innerHTML = "Magna "+data.regular;
        document.getElementById('premium_precio').innerHTML = "Premium "+data.premium;
        document.getElementById('diesel_precio').innerHTML = "Diésel "+data.diesel;
    })
    .catch(error => console.error(error));
}


setInterval('recargarPrecios()', 10000);