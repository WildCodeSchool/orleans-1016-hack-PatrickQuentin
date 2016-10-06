<!doctype html>
<head>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/js/bootstrap.js">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>WeatherMood</title>
</head>
<body>
<?php include 'function.php';
$ville = $_POST['ville'];
?>
    <h1 class="tittle">WeatherMood</h1>
    <div class="container">
        <div class="row_tuile">
            <div class="col-lg-offset-1 col-lg-6 tuile1">
                <div class="row_meteo">
                    <h3>météo musicale de <?php echo $ville; ?></h3>
                    <div class="col-lg-4">
                        <?php echo icon(); ?>
                    </div>
                    <div class="col-lg-8">
                        <h3><?php echo annot();?></h3>
                        <h3>la température est de <?php echo temp();?> °c</h3>
                        <h3>le vent souffle à <?php echo windSpeed();?> km/h</h3>
                    </div>
                </div>


            </div>
            <div class=" col-lg-4 tuile2">
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

$lien='http://api.openweathermap.org/data/2.5/weather?q='.$ville.'&APPID=77191f7030ac008b2be985e20afe4c01';

$request = $lien;
$response  = file_get_contents($request);
$jsonobj  = json_decode($response, true);
$meteo=$jsonobj['weather'][0]['main'];

echo windSpeed();





