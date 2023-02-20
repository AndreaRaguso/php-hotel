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


    if(isset($_GET['parking'])){
        $parking = $_GET['parking'];
    }
    else if (isset($_GET['stars'])) {
        $stars = $_GET['stars'];
    }
    else{
        $normal = true;
    }
    
    


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

    <div class="d-flex justify-content-center mb-3">
        <h1 class="text-center my-5 me-4 w-50">Hotel Disponibili a Lecce</h1>
        <form action="" method="GET" class="align-self-end d-flex align-items-center">

            <div class="dropdown me-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Filtra Per:
                </button>
                <ul class="dropdown-menu p-3">
                    <li>
                        <span class="dropdown-item p-0 fw-bold">Parcheggio</span>
                        <input type="radio" id="parking" class="ms-2 mt-2" name="parking" value="true">
                        <label for="parking" class="fs-5" >Presente</label><br>
                        <input type="radio" id="parking" class="ms-2" name="parking" value="false">
                        <label for="parking" class="fs-5">Assente</label><br>
                    </li>
                    <li>
                        <a class="dropdown-item p-0 fw-bold mt-3">Recensioni</a>
                        <div class="rating">
                            <label>
                                <input type="radio" name="stars" value="1" />
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="stars" value="2" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="stars" value="3" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="stars" value="4" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="stars" value="5" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                        </div>
                    </li>
                </ul>   
            </div>

            <button class="border-1 border border-dark rounded py-1 px-4 fs-5">
                Invia
            </button>

        </form>
    </div>

    <div class="container-lg">
        <div class="row">

            <?php
            foreach ($hotels as $key => $hotel) {
                if($hotel['vote'] == $stars){
                    echo '<div class="col-auto card mx-auto mb-3 hotel-card py-4">';
                    echo '<h2 class="text-center mb-4"> ' . $hotel['name'] . '</h2>';
                    echo '<ul>';
                    echo '<li><strong>Descrizione: </strong>' . $hotel['description'] . '</li>';
                    echo '<li><strong>Parcheggio: </strong>' . ($hotel['parking'] ? 'Presente' : 'Assente')  . '</li>';
                    echo '<li><strong>Voto: </strong>' . $hotel['vote'] . ' stelle</li>';
                    echo '<li><strong>Distanza dal centro : </strong>' . $hotel['distance_to_center'] . ' metri</li>';
                    echo '</ul>';
                    echo '</div>';
                }
            }

            echo $parking;
            echo $stars;

            ?>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>