<?php
include 'functions.php';

$m = [21, 1, -2, 0, -123, 66, -22, 10];
$temp = 0;

echo "<h3>M masyvas prieš rūšiavimą mažėjimo tvarka:</h3>";

arrayPrint($m);

$m = arrayAscending($m);

echo "<h3>M masyvas po rūšiavimo mažėjimo tvarka:</h3>";

arrayPrint($m);
