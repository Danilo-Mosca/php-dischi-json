<?php
require_once './functions.php';

// ------------------- SCRITTURA SU FILE: -------------------------------------

// Prima controllo l'unico valore facoltativo "url" presente nel form se è diverso da vuoto: ""
if ($_POST['url'] != "") {
    $url = $_POST['url'];
} else {
    // se uguale a "" assegno un valore di default
    $url = "Cover non trovata";
}
// var_dump($url);

// Successivamente aggiungo i valori inseriti nel form (passati come super variabili globali $_POST) all'array $json_dischi_text
// Prima verifico la lunghezza dell'array ( con la funzione count() ) e associo il suo valore ad una variabile che poi passerò nelle prime parentesi quadre
$length = count($json_dischi_text);
// echo "Lunghezza dell'array: " . $length;

// Successivamente aggiungo i valori inseriti nel form e passo il valore di $length come parametro nelle prime parentesi quadre
$json_dischi_text[$length]['titolo'] = $_POST['titolo'];
$json_dischi_text[$length]['artista'] = $_POST['artista'];
$json_dischi_text[$length]['url_della_cover'] = $url;
$json_dischi_text[$length]['anno_di_pubblicazione'] = $_POST['anno'];
$json_dischi_text[$length]['genere'] = $_POST['genere'];
// var_dump($json_dischi_text);

// Riconverto la struttura dati da variabile array php in stringa json
$added_json_dischi = json_encode($json_dischi_text);

// Sovrascrivo il contenuto del file dischi.json
file_put_contents("./dischi.json", $added_json_dischi);

// Infine reindirizzo l'utente alla pagina index.php che conterrà il nuovo disco utente
header("Location: ./index.php");

// ------------------- FINE SCRITTURA SU FILE: -------------------------------------
