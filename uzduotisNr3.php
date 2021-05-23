<?php
include 'functions.php';

$m = [56, 95, 88, 73, 29, 72, 27, 10, 54, 20, 91, 98, 38, 69, 28,
    97,	15,	39,	57,	60, 10,	16,	6, 5, 50, 65, 99, 15, 96, 55, 35,
    50, 46,	92,	61, 30,	29,	50,	100, 81];

$temp = 0;
$exercise = 3;

echo "<h3>M masyvas prieš rūšiavimą didėjimo tvarka:</h3>";

twoDimensionalArrayPrint($m);

$m = arrayDescending($m);

echo "<h3>M masyvas po rūšiavimo didėjimo tvarka:</h3>";

twoDimensionalArrayPrint($m);

echo "<h3>M masyvas po rūšiavimo didėjimo tvarka naudojant html table elementų lygiavimui:</h3>";

twoDimensionalArrayTablePrint($m);