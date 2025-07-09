<?php
require_once('./function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi-json-php</title>
</head>

<body>
    <h1>Lista album</h1>

    <div class="">
        <div class="col">
            <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a short card.</p>
                </div>
            </div>
        </div>
        <?php
        foreach ($album as $song) {
            echo "<h3>{$song['titolo']}</h3>";
            echo "<h5>{$song['artista']}</h5>";
            echo "<img>{$song['cover']}</img>";
            echo "<article>{$song['anno']}</article>";
            echo "<article>{$song['genere']}</article>";
        }
        ?>
    </div>

</body>

</html>