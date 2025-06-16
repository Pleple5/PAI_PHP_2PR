<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method=post>
        liczba<input type=number name=liczbaf required>
        <input type=submit value=Wyślij>
        <input type=reset value='Czyść dane'>
    </form>

    <?php
        $liczba=$_POST["liczbaf"];

        $pol=mysqli_connect("localhost","root","","szotzad1");
        if(mysqli_connect_errno()){
            echo "Uwaga:".mysqli_connect_error();
            exit();
        }
        $insliczba="insert into liczby(liczba) values ('$liczba')";
        $w1=mysqli_query($pol, $insliczba);

        $wyswietl = "SELECT * FROM Liczby;";
        if ($w2 = mysqli_query($pol, $wyswietl)) {
            while ($rekord = mysqli_fetch_row($w2)) {
                echo "$rekord[0], ";
            }
            mysqli_free_result($w2);
        }
    ?>
</body>
</html>