<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $aaaaa=1000;
        $bbbbb="Ala";
        session_start();
        print_r($_SESSION);
        echo "<br>";
        $_SESSION['n']++;
        $nn=$_SESSION['n'];
        echo "<br>W sesje2.php n=$nn<br>";
        session_destroy();
    ?>
</body>
</html>