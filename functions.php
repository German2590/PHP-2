<?php



const API_URL = "https://whenisthenextmcufilm.com/api";

function get_data(string $url): array {
    $result = file_get_contents($url); // si solo quieres hacer un GET de una API

    $data = json_decode($result, true);

    return $data;
}

function get_until_message(int $days): string{
  return match (true) {
    $days === 0 => "Hoy se estrena!",
    $days === 1 => "Manana es el estreno!",
    $days < 7 => "Queda una semana!",
    $days < 30 => "Este mes se estrena!.....",
    default    => "$days dias para el estreno!"
  };
}




 # Inicializar una nueva sesion de cURL; ch = CURL handle

 # $ch  = curl_init(API_URL);

 # Indicar que queremos recibir el resultado de la peticiion pero no mostrarlo en pantalla.

 # curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 # Ejecutar la peticion y guardamos el resultado

 # $result = curl_exec($ch);

 # $data = json_decode($result, true);

 # curl_close($ch);

 

?>