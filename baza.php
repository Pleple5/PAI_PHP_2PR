<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style></style>
</head>
<body>
    <form action=bazy_z_formularz.php method=post>
        marka<input type=text name=marka ><br>
        cena<input type=number name=cena><br>
        kolor<input type=text name=kolor required><br>
        rokprod<input type=number name=rokprod><br>
        <input type=submit value=Wyślij>
        <input type=reset value='Czyść dane'>
    </form>
    <?php
        //var_dump($_POST);
        if(isset($_POST["marka"]))
        {
            if(empty($_POST["marka"]) || empty($_POST["cena"]))
            {
                echo "Brak danych";
                exit();
            }
            else
            {
                $marka=$_POST["marka"];
                $cena=$_POST["cena"];
                $kolor=$_POST["kolor"];
                $rokprod=$_POST["rokprod"];

                $pol=mysqli_connect("localhost","root","","samochody");
                if(mysqli_connect_errno())
                {
                    echo "UWAGA:".mysqli_connect_error();
                    exit();
                }
                $z="INSERT INTO auto(marka, cena, kolor, rokprod) VALUES ('$marka','$cena','$kolor', $rokprod)";
                //echp $z;
                $w=mysqli_query($pol, $z);
                mysqli_close($pol);
                
                echo "Dane wysłane do bazy";
                //header("Location: baza_mysqli_z_baza.php")
            }
        }

        // unset($_POST["marka]);
        // var_dump($_POST)
    ?>
</body>
</html>