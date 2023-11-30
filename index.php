<?php
    include __DIR__ . "/model/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hotel</title>
</head>
<body>
    <div class="container">
        <?php foreach($hotels as $key => $value ) {
            echo  'Hotel: ' . $value['name'] . '<br>' . 'Descrizione: ' .  $value['description'] . '<br>' . 'Voto: ' .  $value['vote'] . '<br>' . 'Km dal centro: ' .  $value['distance_to_center'] . '<br>' ;
            } ?>
    </div>
</body>
</html>