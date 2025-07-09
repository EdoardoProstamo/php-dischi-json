<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form</title>
</head>

<body>

    <h1>Aggiungi album</h1>

    <form action="server.php" method="POST">
        <div class="mb-3">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="titolo" name="titolo" required>
        </div>
        <div class="mb-3">
            <label for="artista" class="form-label">Artista</label>
            <input type="text" class="form-control" id="artista" name="artista" required>
        </div>
        <div class="mb-3">
            <label for="anno" class="form-label">Anno di pubblicazione</label>
            <input type="text" class="form-control" id="anno" name="anno" required>
        </div>
        <div class="mb-3">
            <label for="genere" class="form-label">Genere</label>
            <input type="text" class="form-control" id="genere" name="genere" required>
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Cover</label>
            <input class="form-control" type="file" id="cover" name="cover" required>
        </div>
        <button type="submit">Aggiungi</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>