<?php

// Funzione che viene eseguita se la variabile $city è vuota
$city = '';
$weather ='';
$error ='';

if (!empty($_GET['city'])) {
    //Il risultato dell'input city viene assegnato alla variabile $city
    $city = str_replace(' ','',trim($_GET['city']));

$url= 'https://www.weather-forecast.com/locations/'.$city.'/forecasts/latest';

$content = @file_get_contents($url);



if ($content) {
    //strpos va a leggere un pezzo di stringa all'interno di un'altra stringa con una frase identificativa come '3 days'
    //La stringa in questo caso è $content 
    $ini = strpos($content, '3 days');
    //Va a prendere il primo span che si trova dopo la posizione della stringa in $ini, il testo che andiamo a prendere si trova tra $ini e $end
    $end = strpos($content, '</span>',$ini );
    //substr va a leggere il pezzo di stringa preso (+6 sono i caratteri di 3 days)
    //strip_tags è una funzione che elimina i tags
    $weather = strip_tags(substr($content,$ini +7,$end -$ini));

}else {
    $error = 'No data found';

}


}
