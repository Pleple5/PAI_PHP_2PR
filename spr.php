Strona  podzielona jest na 4 sekcje, 2 u góry 2 na dole, w 1 sekcji losują się 2 liczby, a i b, jeżeli a wyjdzie większe od b zamieniają sie wartośćami, w sekcji 2 losuje się liczba c i wyświetal się komunikat liczba c jest blizej liczby a lub b, sekcja 3, dzielmy a przez b x calych reszta x, 4 sekcja loswa liczba duża czcionka na środku sekcji
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdzian</title>
    <style>
        section{
            width: 45%;
            padding: 20px;
            border: 2px black solid;
            margin: auto;
            min-height: 50px;
        }
        #sekcja4{
            text-align: center;
        }
    </style>
</head>
<body>
    <section>
        <?php
        $a=rand(1,100);
        $b=rand(1,100);
        echo "a=$a<br>b=$b";
        if ($a > $b) {
            $zamiana = $a;
            $a = $b;
            $b = $zamiana;
            echo "<br><br>a=$a<br>b=$b";
        }
        ?>
    </section>
    <section>
        <?php
        $c=rand(1,100);
        echo "c=$c";
        $roznicaAC = $a - $c;
        $roznicaBC = $b - $c;
        if ($roznicaAC < $roznicaBC) {
            echo "<br>liczba c jezt blizej liczby a";
        }
        else {
            echo "<br>liczba c jezt blizej liczby b";
        }
        ?>
    </section>

    <br>

    <section>
        <?php
        $dzielenie = $a / $b;
        $reszta = $a % $b;
        echo "$dzielenie całości <br> $reszta reszty"
        ?>
    </section>
    <section id="sekcja4">
    <?php
    $liczba=rand(1,100);
    echo $liczba;
    ?>
    </section>
</body>
</html>