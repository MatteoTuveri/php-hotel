<?php
    include __DIR__ . "/model/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/db5152b6bb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hotel</title>
</head>
<body>
    <div class="container d-flex justify-content-center pt-5">
        <table class="text-center">
            <tr>
                <th>Hotel</th>
                <th>Descrizione</th>
                <th>Parcheggio</th>
                <th>Voto</th>
                <th>Distanza dal centro</th>
            </tr>
            <?php foreach($hotels as $key => $value ) { ?>
            <tr>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['description']; ?></td>
                <td><?php if($value['parking']){echo '<i class="fa-solid fa-check"></i>';} else{echo '<i class="fa-solid fa-xmark"></i>';} ?></td>
                <td><?php echo $value['vote']; ?></td>
                <td><?php echo $value['distance_to_center'];?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>