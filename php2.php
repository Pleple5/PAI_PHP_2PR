<?php
//var_dump($_GET);
//echo "<br>";
//http://localhost/abc.php?x=5&y=7
//! - negacja logiczna NOT
//&& - AND
//|| - OR

if(!isset($_GET['x']) || !isset($_GET['y'])) {
    echo "Brak parametru x lub y";
    exit();
}

if(empty($_GET['x']) || empty($_GET['y'])) {
    echo "Brak wartości parametru x lub y";
    exit();
}

$x = $_GET['x'];
$y = $_GET['y'];

echo "$x=$x<br>$y=$y<br>";
echo "$x+$y=".($x+$y)."<br>";
echo "$x-$y=".($x-$y)."<br>";
echo "$x*$y=".($x*$y)."<br>";
echo "$x/$y=".($x/$y)."<br>";
echo "$x%$y=".($x%$y)."<br>";
?>