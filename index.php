<?php

    // creo variabile e stampo
    $text = "L'inizio è la fine e la fine è l'inizio";
    echo $text;

    echo '<br>' .strlen($text);

    // passiamo il valore della query string
    $censored = $_GET['badwords'];

    echo '<br>';

    // con str_replace cambiamo il valore inserito nella query string
    echo $text2 = str_replace($censored, '***', $text);
    
    echo '<br>' .strlen($text2);
?>