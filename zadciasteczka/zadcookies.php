<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Witaj na mojej stronie</h1>
        <?php
            setcookie('odswiezenie', '1', time()+3);

            if(isset($_COOKIE['odswiezenie']))
            {
            header('Location: http://localhost/zadciasteczka/abc.php');
            exit;
            }
        ?>
    </body>
</html>