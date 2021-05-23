<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Koks gi dabar oras?</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="sun"></div>
<div class="cloud1"></div>
<div class="cloud2"></div>
<div class="cloud3"></div>

<div class="card">

    <h2>Oras šiuo metu:</h2>
        <?php

        if (isset($_COOKIE['weather-info'])) {

            $weatherInfo = json_decode($_COOKIE['weather-info'],true);

            $city = $weatherInfo[0];
            $description = $weatherInfo[1];
            $roundedTemperature = $weatherInfo[2];
            $roundedTemperatureFeel = $weatherInfo[3];
            $pressure = $weatherInfo[4];
            $humidity = $weatherInfo[5];
            $roundedWindSpeed = $weatherInfo[6];
            $visibility = $weatherInfo[7];

            echo "<h3>" . $city . "</h3>";
            echo "<ul>";
            echo "<li>" . $description . "</li>";
            echo "<li>Temperatūra - " . $roundedTemperature . "°C</li>";
            echo "<li>Temperatūros pojūtis - " . $roundedTemperatureFeel . "°C</li>";
            echo "<li>Slėgis - " . $pressure . "HPa</li>";
            echo "<li>Drėgmė - " . $humidity . "%</li>";
            echo "<li>Vėjo greitis - " . $roundedWindSpeed . "m/s</li>";
            echo "<li>Matomumas - " . $visibility . "m</li>";
            echo "</ul>";
        }
        ?>
    <form name="back-form" method="post" action="uzduotisNr4.php">
        <input class="back" type="submit" name="back" id="back" value="Koks oras kitame mieste?">
    </form>
</div>

</body>
</html>