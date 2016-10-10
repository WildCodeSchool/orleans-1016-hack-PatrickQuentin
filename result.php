<!doctype html>
<head>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/js/bootstrap.js">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <title>WeatherMood</title>
</head>
<body>
<?php include 'function.php';
$ville = $_POST['ville'];
$date = date("d-m-Y");
$heure = date("H:i");
?>


<div class="container">
    <div class="row">

        <!---titre-->
        <div class="col-lg-offset-1 col-lg-11 col-xs-12">
            <h1>WeatherMood <?php echo ucfirst($ville); ?></h1> </div>
    </div>
    <div class="espace"></div>
    <div class="row">
        <!---slogan-->
        <div class="col-lg-offset-1 col-lg-3 col-xs-12" >
            <p class="txt2" style="margin-top: 6px">Ecoutez la météo d'ailleur : </p>
        </div>
        <div class="col-lg-5 col-xs-12">
            <form class="form-inline" method="post" action="result.php">
                <div class="form-group">
                    <input type="text" class="form-control input-lg" id="text" name="ville" placeholder="insérer une ville" </div>
                <button type="submit" name="valider" class="btn btn-primary btn-lg">Let the music play</button>
            </form>
        </div>
        <div class="espace"></div>

    </div>
    <div style="margin-bottom: 30px" class="row">
        <!---formulaire-->

    </div>
</div>


    <div class="container_tuile">
        <div class="row_tuile1">
            <div class="col-lg-offset-1 col-lg-6 col-md-offset-1 col-md-6 col-sm-offset-1 col-sm-10 tuile">
                <div class="row_meteo">
                    <h3 class="center">Radio météo de <?php echo ucfirst($ville); ?></h3>
                    <h3 class="center">nous sommes le <?php echo $date; ?> il est <?php echo $heure; ?></h3>
                    <div class="col-lg-4 col-md-4">
                        <div class="icon_position"><?php echo icon(); ?></div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row_infos">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 infos">
                                <img style="padding-top:1em; width: 100%" src="ressources/sun-3-xxlw.png">
                            </div>
                            <div class="col-lg-offset-1 col-lg-8 col-md-offset-1 col-md-9 infos">
                                <p class="infox"><?php echo annot();?></p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 infos">
                                <img style="padding-top:1em; width: 100%" src="ressources/7810-200w.png">
                            </div>
                            <div class="col-lg-offset-1 col-lg-8 col-md-offset-1 col-md-9 infos">
                                <p class="infox">température :<?php echo temp();?> °c</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                <img style="padding-top:1em; width: 100%" src="ressources/pcoABXgziw.png">
                            </div>
                            <div class="col-lg-offset-1 col-lg-8 col-md-offset-1 col-md-9 infos">
                                <p class="infox">vent :<?php echo windSpeed();?> km/h</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 infos">
                                <img style="padding-top:1em; width: 100%" src="ressources/unnamedw.png">
                            </div>
                            <div class="col-lg-offset-1 col-lg-8 col-md-offset-1 col-md-9 infos">
                                <p class="infox"><?php echo humidity()?> %</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class=" col-lg-4 col-md-4  tuile2">
                <?php echo deezer();?>
            </div>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['valider'])) {
    $ville = $_POST['ville'];

}


