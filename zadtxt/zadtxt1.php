<?php
// otwieramy dowolny plik bmp i czytamy 2 pierwsze bajty
$plikbmp = "plik.bmp";

$plik = fopen($plikbmp, "rb");

$zad = fread($plik, 2);
fclose($plik);
?>