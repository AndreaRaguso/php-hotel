<?php


$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];


?>






<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Php Hotel</title>
</head>

<body>

    <h1 class="text-center my-5">Hotel Disponibili a Lecce</h1>

    <div class="container-lg">
        <div class="row">

            <?php
            foreach ($hotels as $key => $hotel) {
                echo '<div class="col-auto card mx-auto mb-3 hotel-card py-4">';
                echo '<h2 class="text-center mb-4"> Hotel numero ' . $key + 1 . '</h2>';
                echo '<ul>';
                echo '<li><strong>Nome: </strong>' . $hotel['name'] . '</li>';
                echo '<li><strong>Descrizione: </strong>' . $hotel['description'] . '</li>';
                echo '<li><strong>Parcheggio: </strong>'. ($hotel['parking'] ? 'Presente' : 'Assente' )  .'</li>';
                echo '<li><strong>Voto: </strong>' . $hotel['vote'] . ' stelle</li>';
                echo '<li><strong>Distanza dal centro : </strong>' . $hotel['distance_to_center'] . ' metri</li>';
                echo '</ul>';
                echo '</div>';
            }
            ?>

        </div>
    </div>


</body>

</html>