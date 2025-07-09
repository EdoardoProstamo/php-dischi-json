<?php
require_once('./function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Dischi-json-php</title>
</head>

<body>
    <header class="py-5 text-center text-white" style="background: linear-gradient(135deg, #4a90e2, #50e3c2);">
        <h1 class="display-4 fw-bold">La tua playlist</h1>
        <p class="lead">Scopri gli album più belli in un unico posto</p>
    </header>
    <main class="bg-light py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                <?php foreach ($album as $song) { ?>
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <img src="<?php echo $song['cover']; ?>" class="card-img-top" alt="Copertina di <?php echo htmlspecialchars($song['titolo']); ?>">
                            <div class="card-body">
                                <h5 class="card-title fw-bold"><?php echo $song['titolo']; ?></h5>
                                <p class="card-text mb-0"><?php echo $song['artista']; ?></p>
                                <small class="text-muted"><?php echo $song['anno']; ?> - <?php echo $song['genere']; ?></small>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>