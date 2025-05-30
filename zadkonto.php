<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konto Banowe</title>
</head>
<body>
    <form method="post">
        <button type="submit" name="wplac">Wpłać</button>
        <button type="submit" name="wyplac">Wypłać</button>
    </form>

<?php
    // konto bankowe, metody w klasie stan konta konstruktor tworzy to konto z zerowym stanem, metoda wpłać, metoda wypłać i stan konta
    class kontobankowe
    {
        private $stan;

        public function __construct()
        {
            $this->stan=0;
        }

        public function wplac($kwota)
        {
            if ($kwota > 0){
                $this->stan+=$kwota;
            }
        }
    }
    ?>
</body>
</html>
