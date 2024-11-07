Masz 2 sekcje w sekcji gornej losujemy 100 liczb w zakresie 1 do 5, a w dolnej sekcji wyswietelamy informacjie ile razy wystopila dana liczba
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie</title>
    <style>
        section{
            border: 2px black solid;
            padding: 20px;
            width: 80%;
            margin: auto;
            min-height: 200px;
        }
    </style>
</head>
<body>
    <section>
        <?php
        $l = [0, 0, 0, 0, 0, 0];

        for($i=0;$i<100;$i++)
        {
            $liczba[]=rand(1,5);
            echo $tab[$i].", ";

            $l[$liczba]++;
        }
        ?>
    </section>

    <br>

    <section>
        <?php
        foeach($l as $klucz) echo "$klucz ";
        ?>
    </section>
</body>
</html>