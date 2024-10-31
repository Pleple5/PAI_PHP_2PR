skrypt losuje liczbe n, wyswitlana ona sie, 3 sekcje, nastepnie losujemy n liczb od zakresu 1 do 100, wyswietlamy te liczby, po tym liczymy sume, srednia i odchylenie standardowe
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odchylenie Standardowe</title>
    <style>
        section{
            padding: 20px;
            min-height: 200px;
            border: 2px black solid;
            width: 70%;
            margin: auto;
        }
    </style>
</head>
<body>
    <section>
        <?php
            $n = rand(1,100);
            echo "n = $n";
        ?>
    </section>

    <section>
        <?php
             for($i=0; $i<$n; $i++)
             {
                 $tab[]=rand(1,100);
                 echo " $tab[$i]"
             }
        ?>
    </section>

    <section>
        <?php
            $suma = array_sum($tab);
                echo "suma = $suma<br>";

            $srednia = $suma / $n;
                echo "srednia = $srednia<br>";  

            $odchylenie
        ?>
    </section>
</body>
</html>