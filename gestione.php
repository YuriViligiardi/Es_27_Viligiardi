<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestione.php</title>
</head>
<body>
    <?php
    $name = $_POST["nome"];
    $cost = $_POST["costo"];
    $quantity = $_POST["quantita"];
    $status = checkStatus();
    $payment = $_POST["pagamento"];
    $initialPrice = intval($cost) * intval($quantity);
    $finalPrice = discount($status, $payment, $cost);
    $listData = array("nome" => $name, "costo" => $cost, "quantita" => $quantity, "stato" => $status, "pagamento" => $payment, "Prezzo iniziale" => $initialPrice, "Prezzo finale" => $finalPrice);
    createList($listData);


    function checkStatus() {
        if (isset($_POST["stato"])) {
            return "Oggetto usato";
        } else {
            return "Oggetto nuovo";
        }
    }

    function discount($s ,$p, $n){
        if ($s == "Oggetto usato") {
            $discount = ($n / 100) * 20;
            $n -= $discount;
        }
        
        if ($p == "carta") {
            $n += 2;
        }
        return $n;
    }

    function createList($ld){
        echo "<h1>DATI PRODOTTO:</h1>";
        echo "<ul>";
            foreach ($ld as $d => $value) {
                echo "<li>" . $d . ": " . $value . "</li>";
            }
        echo "</ul>";
    }

    ?>
</body>
</html>