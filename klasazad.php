<?php
// klasa bazowa opisująca kwadrat, metody: pole powierzchni i obwód, metoda do zmiany długości boku, ostrosłup, metoda objętość, metoda powierznichnia(1/3 * Pp * H), metoda do zmiany h
class kwadrat{
    protected $bok;

    public function pole()
    {
        return $this->a*$this->a;
    }

    public function obwod()
    {
        return $this->a*$this->4;
    }

    public function zmianaA(){
        
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bok = floatval($_POST['bok']);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
     <meta charset="UTF-8">
    <title>Konto bankowe</title>
</head>
<body>
    <form method="post">
        <label for="bok">Wprowadź długość boku kwadratu:</label>
        <button type="submit">Wyślij</button>
    </form>
</body>
</html>