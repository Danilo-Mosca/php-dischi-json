<?php

// Leggere il file "dischi.json"
$file = file_get_contents('./dischi.json');
// echo $file;

// converto la stringa ricevuta da formato json a struttura dati php (in una variabile PHP)
// Assegno come secondo parametro "true" perchè voglio che mi risponda in output come un array associativo
// non come un oggetto
$json_dischi_text = json_decode($file, true);
// var_dump($json_dischi_text);
// var_dump($json_dischi_text[0]["titolo"]);