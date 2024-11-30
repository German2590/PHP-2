

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test-2 La proxima pelicula de Marvel</title>
    <link
    rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
</head>

<body>

<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
 # Inicializar una nueva sesion de cURL; ch = CURL handle

 $ch  = curl_init(API_URL);

 # Indicar que queremos recibir el resultado de la peticiion pero no mostrarlo en pantalla.

 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 # Ejecutar la peticion y guardamos el resultado

 $result = curl_exec($ch);

 $data = json_decode($result, true);

 curl_close($ch);

 

?>
    <main>
       
        <section style="text-align: center;">
            <img src="<?= $data["poster_url"]; ?>" alt="Poster <?= $data["title"]; ?>" width="200" 
            style="border-radius: 6px;">
       
        </section>
        <hgroup style="text-align: center;">
            <h2><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> dias.</h2>
            <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
            <p>El siguiente estreno es: <?= $data["following_production"]["title"]; ?></p>
        </hgroup>
    </main>
</body>
</html>