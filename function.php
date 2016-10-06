<?php

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
        return "<iframe scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" src=\"http://www.deezer.com/plugins/player?format=classic&autoplay=true&playlist=true&width=700&height=350&color=007FEB&layout=dark&size=medium&type=playlist&id=1703162151&app_id=1\" width=\"700\" height=\"100\"></iframe>";

    if ($meteo == 'Rain')
        return "<iframe scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" src=\"http://www.deezer.com/plugins/player?format=square&autoplay=false&playlist=false&width=300&height=300&color=007FEB&layout=dark&size=medium&type=album&id=11428620&app_id=1\" width=\"300\" height=\"300\"></iframe>";

    if ($meteo == 'Clouds')
        return "<iframe scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" src=\"http://www.deezer.com/plugins/player?format=square&autoplay=true&playlist=false&width=300&height=300&color=007FEB&layout=dark&size=medium&type=playlist&id=2299012742&app_id=1\" width=\"300\" height=\"300\"></iframe>";

    if ($meteo == 'Snow')
        return "<iframe scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" src=\"http://www.deezer.com/plugins/player?format=square&autoplay=false&playlist=false&width=300&height=300&color=007FEB&layout=dark&size=medium&type=playlist&id=2298968722&app_id=1\" width=\"300\" height=\"300\"></iframe>";

}

