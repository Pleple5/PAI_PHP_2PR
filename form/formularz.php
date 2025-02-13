<?php
//print_r($_POST); //var_dump($_POST)
if(isset($_POST['wiek']))
{
    echo "Formularz nie został poprawnie wysłany"
    exit();
}
if(empty($_POST['wiek']) || empty($_POST['nazwisko']))
{
    echo "Brak danych w formularzu";
    exit();
}
//print_r($_POST);
$wiek=$_POST['wiek'];
$nazwisko=$_POST['nazwisko'];
if(isset($_POST['obecny'])) $obecny=$_POST['obecny'];
else $obecny="nie zaznaczono";
if(isset($_POST['plec'])) $plec=$_POST['plec'];
else $plec="nie zaznaczono";
$kolor=$_POST["kolor"];
$opis=$_POST["opis"];
echo "Wiek=$wiek<br>"
?>