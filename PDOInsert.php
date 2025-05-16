<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="PDOinset.php" mtehod="post">
        <input type="text" name="marka" placeholder="Marka">
        <input type="text" name="model" placeholder="Model">
        <input type="number" name="cena" placeholder="Cena">
        <input type="submit" value="Dodaj">
    </form>

    <?php
        if(isset($_POST["marka"]))
        {
            if(empty($_POST["marka"]) || empty($_POST["model"]) || empty($_POST["cena"]))
            {
                echo "Brak danych";
                exit();
            }
            else
            {
                $marka=$_POST["marka"];
                $model=$_POST["model"];
                $cena=$_POST["cena"];
                try
                {
                    $pdo = new pDO('mysql:host=localhost;dbname=samochody','root','');
                    $pdo
                }
            }
        }
    ?>
</body>
</html>