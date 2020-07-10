<?php
echo "ik ga twee getallen met elkaar vermenigvuldigen" . PHP_EOL;

$getal_1 = readline("wat is je eerste getal?: ");
$getal_2 = readline("wat is je tweede getal?: ");

$som = (int) $getal_1 * (int) $getal_2;
$tekst = "de twee getallen samen zijn: ";
echo ($tekst . $som);