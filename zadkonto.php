<?php
    // konto bankowe, metody w klasie stan konta konstruktor tworzy to konto z zerowym stanem, metoda wpłać, metoda wypłać i stan konta
    class kontobankowe
    {
        class KontoBankowe
        {
            private $stan;
        
            public function __construct()
            {
                $this->stan = 0;
            }
        
            public function wplac($kwota)
            {
                if ($kwota > 0)
                {
                    $this->stan += $kwota;
                    return "Wpłacono $kwota zł";
                }
                return "Kwota musi być większa niż 0";
            }
        
            public function wyplac($kwota) {
                if ($kwota <= 0)
                {
                    return "Kwota musi być większa niż 0";
                }
                elseif ($kwota > $this->stan)
                {
                    return "Brak środków";
                }
                else
                {
                    $this->stan -= $kwota;
                    return "Wypłacono $kwota zł";
                }
            }
        
            public function stanKonta() {
                return $this->stan;
            }
        }
    }

$konto = new KontoBankowe();
$komunikat = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kwota = floatval($_POST['kwota']);

    if (isset($_POST['wplac'])) {
        $komunikat = $konto->wplac($kwota);
    }

    if (isset($_POST['wyplac'])) {
        $komunikat = $konto->wyplac($kwota);
    }

    $stan = $konto->stanKonta();
        else {
    $stan = $konto->stanKonta();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
     <meta charset="UTF-8">
    <title>Konto bankowe</title>
</head>
<body>
    <h1>Konto Bankowe</h1>
    <p><strong>Stan konta:</strong> <?php echo $konto->stanKonta(); ?> zł</p>
    
    <form method="post">
        <label for="kwota">Kwota:</label>
        <input type="number" step="0.01" name="kwota" required>
        <br><br>
        <button type="submit" name="wplac">Wpłać</button>
        <button type="submit" name="wyplac">Wypłać</button>
    </form>
    
    <p style="color:green;"><?php echo $komunikat; ?></p>
</body>
</html>
