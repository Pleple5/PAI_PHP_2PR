<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablice PHP</title>
    <style>
        *{
            font-size 1.05em;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .czerwony{
            color: red;
            font-weight: bold;
        }
        .niebieski{
            color: blue:
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    $tab1=['a','b','c','d','e'];
    echo 'Tablice tab1 zawiera '.count($tab1)," elementów<br>";
    foreach($tab1 as $a)
    {
        echo "$a ";
    }
    echo "<br>".$tab1[3]."<br>";
    $tab2=[];
    $tab2[1]=100;
    $tab2[50]=200.09;
    $tab2[100]=150;
    var_dump($tab2);
    echo "<br>";
    foeach($tab2 as $klucz) echo "$klucz ";
    echo "<br>";
    sort($tab2);
    foeach($tab2 as $klucz) echo "$klucz ";
    echo "<br>";
    rsort($tab2);
    foeach($tab2 as $klucz) echo "$klucz ";
    echo "<br>";
    $tab3=array();
    $tab3[]=rand(1,100);
    $tab3[50000]=rand(1,100);
    $tab3[]=rand(1,100);
    echo "<br>";
    var_dump($tab3);
    echo "<br>";
    foeach($tab2 as $klucz) echo "$klucz ";
    echo "<br>";
    echo min($tab3); // max//count //array_sum
    //$srednia=array_sum($tab3)/count($tab3)
    echo "<br>";

    //tablice asocyjne
    $tab4["imie"]="Jan";
    $tab4["nazwisko"]="Kowalski";
    echo $tab4["nazwisko"];
    echo "<br>";
    $dane = "ala,ola kowalska,eal";
    $tablica = explode(",", $dane);
    var_dump($dane1);
    echo "$dane1<br>"

    for($i=0;$i<100;$i++)
    {
        $tab[]=rand(10,50);
    }
    $min=min($tab);
    $max=max($tab);
    for($i=0;$i<100;$i++){
        if($tab[$i]==$min) echo "<span class=czerwony>".$tab[$i]." </span>"
        else if($tab[$i]==$max) echo "<span class=niebieski>".$tab[$i]." </span>"
        esle echo $tab[$i]." ";
    }
    echo "<br>";
    echo "min = $min";
    echo "<br>";
    echo "max = $max";
    ?>

</body>
</html>