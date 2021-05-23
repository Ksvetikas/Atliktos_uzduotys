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

<?php

$errorMessage = 0;
$inputValue = "";

if (isset($_POST['submit']) && (isset($_POST['city-input']))) {

    $inputValue = $_POST['city-input'];

    if (($_POST['city-input'] !== "") && (!is_numeric($_POST['city-input'])) && ($_POST['city-input'] !== "")) {

        $city = $inputValue;

        $weatherRequest = "https://api.openweathermap.org/data/2.5/weather?q=" . $city  . "&units=metric&appid=e529c6fe046a67a12f0cd9931b630a11&lang=lt";
        $weatherInfo = @file_get_contents($weatherRequest);

        if ($weatherInfo !== false) {

            $array = json_decode($weatherInfo, true);

            $weatherInfo = [];

            $weatherInfo[0] = $array['name'];
            $weatherInfo[1] = $array['weather'][0]['description'];
            $weatherInfo[2] = round($array['main']['temp']);
            $weatherInfo[3] = round($array['main']['feels_like']);
            $weatherInfo[4] = $array['main']['pressure'];
            $weatherInfo[5] = $array['main']['humidity'];
            $weatherInfo[6] = round($array['wind']['speed'], 1);
            $weatherInfo[7] = $array['visibility'];

            $encodedArray = json_encode($weatherInfo, true);

            setcookie("weather-info", $encodedArray, time() +600);
            header("location: uzduotisNr4Rezultatai.php");
        }else {

            $errorMessage = 3;
        }

    } elseif ($_POST['city-input'] == "") {
        $errorMessage = 2;

    } else {
        $errorMessage = 1;
    }
}
?>

    <div class="card">
        <h2>Koks gi dabar oras?</h2>
        <form name="city-form" method="post" action="">
            <label for="city-input">Įveskite miesto pavadinimą</label>
            <input type="text" name="city-input" id="city-input" title="Užpildykite miesto laukelį." value="<?php echo $inputValue;?>" requested/>
            <input type="submit" name="submit" id="submit" value="Ieškoti"/>

<?php

switch ($errorMessage){
    case 1:
        echo "<p id='invalid'>Pasitikslinkite miesto pavadinimą.</p>";
        break;
    case 2:
        echo "<p id='invalid'>Laukelis tuščias.</p>";
        break;
    case 3:
        echo "<p id='no-weather-info'>Orų informacijos apie tokį miestą nėra.</p>";
}
?>

        </form>
    </div>
<script src="js/script.js"></script>
</body>
</html>