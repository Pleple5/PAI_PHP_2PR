<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>funckje</title>
    </head>
    <body>
        <?php
            // include("funkcje_moje.php");
            // require_once("funkcje_moje.php");

            function aaa(&$tablica) // & referencja
            {
                $tablica[1] = 100;
            }

            function razydwa($a)
            {
                $wynik= 2 * $a;
                return $wynik;
            }
            
            function mnozenie($a, $b, $c)
            {
                return $a * $b * $c;
            }

            function cosTamLiczy()
            {
                return razydwa(3)*mnozenie(2,2,2);
            }

            function zmienNapis(&$napis){
                $napis = 'Ola ma kota';
                return "Jakis tekst";
            }

            function licz($f, $a=400, $z=100)
            {
                return $a + $z + $f;
            }

            $tab=array();
            $tab[1]=200;
            echo $tab[1]."<br>";
            aaa($tab);
            echo $tab[1]."<br>";

            $f = 150;
            echo razydwa($f) * 100;

            echo "<br>".mnozenie(1, 2, 3);
            echo "<br>".cosTamLiczy();

            $a = "Ala ma kota";
            // var_dump($a);
            echo "<br>".zmienNapis($a);
            echo "<br>$a";

            echo "<br>".licz(4, 8);
            echo "<br>".licz(7);
            echo "<br>".licz(7, z:1);
        ?>
    </body>
</html>