<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/js/bootstrap.js">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <title>Weather Mood, Site Météoradiologique</title>
</head>

<body>
<div class="container-fluid">
    <div class="row">

        <!---titre-->
        <div class="col-lg-offset-1 col-lg-8 col-md-offset-1 col-md-8 col-sm-offset-1 col-sm-6 col-xs-offset-1">
            <h1>Weather Mood</h1></div>
    </div>
    <div class="espace"></div>
    <div class="row">
        <!---slogan-->
        <div class="col-lg-offset-2 col-lg-6 col-md-offset-2 col-md-5 col-sm-offset-3 col-sm-7 col-xs-offset-1 col-xs-11" >
            <p class="txt">Il est temps d'écouter votre météo </p>
        </div>


    </div>
    <div class="espace2"></div>

    <div class="row" ><!---formulaire--><div class="col-lg-offset-2 col-lg-7 col-md-offset-1 col-md-5 col-sm-offset-3 col-sm-8 col-xs-offset-2 col-xs-8"><form class="form-inline" method="post" action="result.php"><div class="form-group"><input type="text" class="form-control input-lg" id="text" name="ville" placeholder="insérez une ville" </div><button type="submit" name="valider" class="btn btn-primary btn-lg">Let the music play</button></form></div></div>
</div>


</body>

</html>
