<?php

$f0 = 0;
$f1 = 1;

echo "F0 = $f0 <br>";
echo "F1 = $f1 <br>";

for ($i = 2; $i < 100; $i++) {
    $f = $f0 + $f1;
    echo "F$i = $f <br>";
    
    $f0 = $f1;
    $f1 = $f;
}
?>