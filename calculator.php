<?php
echo "Welke operatie wil je uitvoeren? (+, -)" . PHP_EOL;
$plus = readline();
echo "Eerste getal" . PHP_EOL;
$getal1 = readline();
echo "Tweede getal" . PHP_EOL;
$getal2 = readline();



if ($plus == "+") {
  echo "Uw resultaat is:" . $getal1 += $getal2;
} else {
  echo "Uw resultaat is:" . $getal1 - $getal2;
}

 ?>
