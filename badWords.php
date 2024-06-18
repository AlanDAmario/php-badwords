<?php

echo '<h2>Ecco la parola</h2>';
echo '<hr>';
// var_dump($_GET);

//NELLA VARIABILE ANDIAMO A SALVARE IL VALORE ATTRAVERSO IL METODO GET DI 'text', CHE è IL NOME ATTRIBUITO AL TEXT AEREA NELLA PAGNA INDEX.PHP
$text = $_GET['text'];
//RICHIAMO VARIABILE PER STAMPA
echo $text . ' (parola scelta)';
echo '<hr>';
// METODO PER AVERE LA LUNGHEZZA DELLA PAROLA 'STRLEN'
$text_censure = strlen($text);

echo $text_censure . ' lunghezza stringa';
echo '<hr>';
$bad_word = $_GET['badword'];
//METODO PER SOSTITUIRE I VALORI
$text_clean = str_replace($bad_word, '***', $text);
echo $bad_word . ' (parola da censurare)';
echo '<hr>';
echo $text_clean . ' (parola censurata)';

$text_clean_badword = strlen($text_clean);
echo '<hr>';
echo $text_clean_badword . ' (lunghezza parola censurata dopo aver sostituito con i 3 asterischi)';
