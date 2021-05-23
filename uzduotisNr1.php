<?php
include 'functions.php';

$m = [1, 55, 22, 22, 1, -2, 0, -123, 66, 22, 11];
$temp = 0;

echo "<h3>M masyvas prieš rūšiavimą didėjimo tvarka:</h3>";

arrayPrint($m);

$m = arrayDescending($m);

echo "<h3>M masyvas po rūšiavimo didėjimo tvarka:</h3>";

arrayPrint($m);