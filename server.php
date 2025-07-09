<?php

// validazione per vedere se il form è stato inviato
if ($_POST['titolo'] && $_POST['artista'] && $_POST['anno'] && $_POST['genere'] && $_POST['cover']) {

    // dati inviati al form
    $titolo = $_POST['titolo'];
    $artista = $_POST['artista'];
    $anno = $_POST['anno'];
    $genere = $_POST['genere'];
    $cover = $_POST['cover'];

    // dati attualmente presenti nel file music.json
    $music = file_get_contents("./music.json");
    $album = json_decode($music, true);

    // aggiunta nuovo album all'array di music.json
    $album[] = [
        "titolo" => $titolo,
        "artista" => $artista,
        "anno" => $anno,
        "genere" => $genere,
        "cover" => $cover
    ];

    // conversione dell'array in json
    $music = json_encode($album);

    // sovrascrivo il file music.json con l'aggiunta dei nuovi dati
    file_put_contents('./music.json', $music);

    // reindirizzo alla pagina principale
    header('Location: ./index.php');
} else {
    // reindirizzo alla pagina principale se i dati non sono stati inviati
    header('Location: ./index.php');
}
