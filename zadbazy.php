<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <form method="post">
            Liczba: <input type="number" name="liczbaf">
            <input type=submit value=Wyślij>
    </form>
        <?php
            // 3 sekcje, w pierwszej formularz do wprowadznie liczby, liczbe zapisujemy do bazy, w sekcji 2, wszystkie liczby z tej bazy się wyświetlają, w sekcji 3 suma tych liczby
            if(isset($_POST["liczbaf"]))
            {
                if(empty($_POST["liczbaf"]))
                {
                    echo "Brak danych";
                    exit();
                }
                else
                {
                    $Liczba=$_POST["liczbaf"];
                    $pol=mysqli_connect("localhost","root","","Liczbazad");
                    if(mysqli_connect_errno())
                    {
                        echo "UWAGA:".mysqli_connect_error();
                        exit();
                    }
                    $z="INSERT INTO liczby(Liczba) VALUES ('$Liczba')";
                    $w1=mysqli_query($pol, $z);
                }
            }
        ?>
    </section>

    <section>
        <?php
        $wyswietl = "SELECT * FROM Liczby;";
        if ($w2 = mysqli_query($pol, $wyswietl)) {
            while ($rekord = mysqli_fetch_row($w2)) {
                echo "$rekord[0], ";
            }
            mysqli_free_result($w2);
        }
        ?>
    </section>

    <section>
        <?php
            $sum="SELECT sum(liczba) FROM `liczby`;";
            $w3=mysqli_query($pol, $sum);
        ?>
    </section>
</body>
</html>