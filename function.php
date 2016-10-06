<?php

                    /*===============================================*\
                                        DEEZER ADAPTATION
                    \*===============================================*/


function deezer(){

    if(isset($_POST['valider'])) {
        $ville = $_POST['ville'];

    }

    $lien='http://api.openweathermap.org/data/2.5/weather?q='.$ville.'&APPID=77191f7030ac008b2be985e20afe4c01';

    $request = $lien;
    $response  = file_get_contents($request);
    $jsonobj  = json_decode($response, true);
    $meteo=$jsonobj['weather'][0]['main'];
    echo $meteo;
    echo "</br>".$ville;

    if ($meteo == 'Clear')
        return "<iframe scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" src=\"http://www.deezer.com/plugins/player?format=square&autoplay=true&playlist=false&width=300&height=300&color=007FEB&layout=dark&size=medium&type=playlist&id=2298993622&app_id=1\" width=\"300\" height=\"300\"></iframe>";

    if ($meteo == 'Rain')
        return "<iframe scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" src=\"http://www.deezer.com/plugins/player?format=square&autoplay=true&playlist=false&width=300&height=300&color=007FEB&layout=dark&size=medium&type=playlist&id=2298997222&app_id=1\" width=\"300\" height=\"300\"></iframe>";

    if ($meteo == 'Clouds')
        return "<iframe scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" src=\"http://www.deezer.com/plugins/player?format=square&autoplay=true&playlist=false&width=300&height=300&color=007FEB&layout=dark&size=medium&type=playlist&id=2299012742&app_id=1\" width=\"300\" height=\"300\"></iframe>";

    if ($meteo == 'Snow')
        return "<iframe scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" src=\"http://www.deezer.com/plugins/player?format=square&autoplay=true&playlist=false&width=300&height=300&color=007FEB&layout=dark&size=medium&type=playlist&id=2298968722&app_id=1\" width=\"300\" height=\"300\"></iframe>";

}

            /*===============================================*\
                                ICONES WEATHER
            \*===============================================*/


function icon(){

    if(isset($_POST['valider'])) {
        $ville = $_POST['ville'];

    }
    $lien='http://api.openweathermap.org/data/2.5/weather?q='.$ville.'&APPID=77191f7030ac008b2be985e20afe4c01';

    $request = $lien;
    $response  = file_get_contents($request);
    $jsonobj  = json_decode($response, true);
    $meteo=$jsonobj['weather'][0]['main'];

    if ($meteo == 'Clear')
        return "<div class=\"icon sunny\"><div class=\"sun\"><div class=\"rays\"></div></div></div>";

    if ($meteo == 'Rain')
        return "<div class=\"icon rainy\"><div class=\"cloud\"></div><div class=\"rain\"></div></div>";

    if ($meteo == 'Clouds')
        return "<div class=\"icon cloudy\"><div class=\"cloud\"></div><div class=\"cloud\"></div></div>";

    if ($meteo == 'Snow')
        return "<div class=\"icon flurries\"><div class=\"cloud\"></div><div class=\"snow\"><div class=\"flake\"></div><div class=\"flake\"></div></div></div>";
}


            /*===============================================*\
                                TEMPERATURE
            \*===============================================*/

function temp(){

    if(isset($_POST['valider'])) {
        $ville = $_POST['ville'];

    }
    $lien='http://api.openweathermap.org/data/2.5/weather?q='.$ville.'&APPID=77191f7030ac008b2be985e20afe4c01';

    $request = $lien;
    $response  = file_get_contents($request);
    $jsonobj  = json_decode($response, true);


    $temp=$jsonobj['main']['temp']-273;


    return round($temp, 1);
}


                /*===============================================*\
                                  ANNOT WEATHER
                \*===============================================*/

 function annot(){
     if(isset($_POST['valider'])) {
         $ville = $_POST['ville'];

     }
     $lien='http://api.openweathermap.org/data/2.5/weather?q='.$ville.'&APPID=77191f7030ac008b2be985e20afe4c01';

     $request = $lien;
     $response  = file_get_contents($request);
     $jsonobj  = json_decode($response, true);
     $meteo=$jsonobj['weather'][0]['main'];




     if ($meteo == 'Clear')
         return "It's sunny, be happy";

     if ($meteo == 'Rain')
         return "It's rain again...";

     if ($meteo == 'Clouds')
         return "Au-dessus des nuages, le ciel est toujours bleu";

     if ($meteo == 'Snow')
         return "il neige";
 }


                /*===============================================*\
                                    wind speed
                \*===============================================*/

function windSpeed()
{

    if (isset($_POST['valider'])) {
        $ville = $_POST['ville'];

    }
    $lien = 'http://api.openweathermap.org/data/2.5/weather?q=' . $ville . '&APPID=77191f7030ac008b2be985e20afe4c01';

    $request = $lien;
    $response = file_get_contents($request);
    $jsonobj = json_decode($response, true);
    $windSpeed = round((($jsonobj['wind']['speed']*36)/10), 1);
    return $windSpeed;
}