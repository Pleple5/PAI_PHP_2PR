<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<br>".rand(1,30)."<br>";
        echo "<br>";
        $a=10;
        echo ++$a."<br>"
        for($i=1;$1<11;$i++)
        {
            if($i==5) continue;
            echo "$i ";
        }
        echo "<br>";
    ?>
    <hr>
    <?php
        $i=1;
        do{
            echo "$i ";
            $i++;
            if($i<11) break;
        }while($i<11);

        echo "<br>";
        $i=1;
        while($i<11)
        {
            echo "$i ";
            $i++;
        }

        echo "<br>";
        $tablice=['a','b','c','d'];
        foreach($tablica as $klucz) {
            echo "$klucz";
        }
        echo "<br>"
        for($i=0;$i<sizeof($tablica);$i++) {
            echo $tablica[$i]." ";
        }
        $liczby[1]=100;
        $liczby[20]=1200.9;
        $liczby[300]=2;

        var_dump($liczby);
        echp "<br>";
        foreach($liczby as $klucz) {
            echo "$klucz";
        }
        echo "<br>";
        for($1=0;$1<301;$i++)
        {
            ifE(iiset($liczby[$i])) echo $liczby[$i]." ";
        }
    ?>
</body>
</html>