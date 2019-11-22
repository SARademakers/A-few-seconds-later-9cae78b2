<?php

$pos = strpos($argv[1], "s");
var_dump ($tijd);

if ($pos === false) {
    echo ("Geen tijd gevonden");
} else {
    $posint = (int)$argv[1];
    echo ($posint . " seconden");
}
?>