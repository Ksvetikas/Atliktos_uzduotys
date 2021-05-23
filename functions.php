<?php
function arrayDescending($array) {

    for ($i = 0; $i < count($array); $i++) {

        for ($j = $i + 1; $j < count($array);$j++) {

            if ($array[$i] > $array[$j]) {

                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}

function arrayAscending($array) {
    for ($i = 0; $i < count($array); $i++) {

        for ($j = $i + 1; $j < count($array); $j++) {

            if ($array[$i] < $array[$j]) {

                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}

function arrayPrint($array) {

    echo "Atspausdintas naudojant print_r: <br>";
    print_r($array);
    echo "<br><br>";
    echo "Atspausdintas naudojant echo: <br>";

    echo "<pre>m = [";

    for ($i = 0; $i < count($array); $i++) {

        if ($i === (count($array) - 1)) {
            echo $array[$i] . "]</pre>";
        } else {
            echo $array[$i] . " ";
        }
    }
}

function twoDimensionalArrayPrint($array) {

//              Pastaba: Jei reikėtų atspausdinti array, kuris yra išrūšiuotas didėjimo tvarka ir pirmasis elementas
//              būtų sudarytas iš trijų simbolių visur reikėtų pridėti po  vieną papildomą tarpą kad pirmasis
//              elementas būtų atsiskyręs nuo antrojo ir išliktų lygiavimas. Dabar esantį lygiavimą palikau
//              vadovaudamasis pateiktu vaizdu kaip turėtų atrodyti atspausdintas masyvas ir turėdamas omenyje, kad
//              reikia atspausdinti didėjimo tvarka surūšiuotą masyvą.

    echo "<pre>m = [";

    for ($i = 0; $i < count($array); $i++) {

//              Elemento ilgio priskyrimas kintamajam.
            $elementLength = strlen($array[$i]);

//              Spausdinamas array elementas.
            echo $array[$i];

//              Elementų lygiavimas:

//              Tikrinamas pirmo elemento simbolių skaičius ir pagal tai sulygiuojama.
            if ($i === 0) {

//              Pirmasis elementas sulygiuojamas jei yra sudarytas iš dviejų skaitmenų.
                if ($elementLength === 1) {
                    echo "  ";

//              Pirmasis elementas sulygiuojamas jei yra sudarytas iš trijų skaitmenų.
                }elseif ($elementLength === 3) {
                    echo "";

//              Pirmasis elementas sulygiuojamas jei yra sudarytas iš dvejų skaitmenų.
                } else {
                    echo " ";
                }

//              Po paskutinio elemento uždaromas <pre> tag.
            }elseif ($i === (count($array) - 1)) {
                echo "]</pre>";

//              Kas penkis elementus perkeliama į naują eilutę.
            }elseif (($i + 1) % 5 === 0) {
                echo "<br>";

//              Sulygiuojama jei elementas yra iš dviejų skaitmenų.
            }elseif ($elementLength === 2) {
                echo "      ";

//              Sulygiuojama jei elementas yra vieno skaitmens.
            }elseif ($elementLength === 1) {
                echo "       ";

//              Sulygiuojama jei elementas yra iš trijų skaitmenų.
            }else {
                echo "     ";
            }
    }
}

function twoDimensionalArrayTablePrint($array) {

    echo "<pre><table width='500px'><tr><td width='85px'>m = [";

    for ($i = 0; $i < count($array); $i++) {

//              Paskutinio elemento spausdinimas.
        if ($i === (count($array) - 1)) {
            echo $array[$i] . "]</td></tr></table></pre>";

//              Kas penkis elementus perkeliama į naują eilutę.
        }elseif (($i + 1) % 5 === 0) {
            echo $array[$i] . "</td></tr><tr><td>";

        }else {
            echo $array[$i] . "</td><td>";
        }
    }
}