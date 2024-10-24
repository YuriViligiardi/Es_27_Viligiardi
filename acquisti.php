<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acquisti.php</title>
</head>
<body>
   <form action="gestione.php" method="POST">
    <p>Inserire nome dell'oggetto: </p>
    <input type="text" name="nome">
    <p>Inserire costo dell'oggetto: </p>
    <input type="text" name="costo">
    <p>selezionare la quantità dell'oggetto: </p>
    <select name="quantita" id="quantita">
        <option value="1">1</option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="20">20</option>
    </select>
    <p>selezionare stato dell'oggetto: </p>
    <input type="checkbox" name="stato" value="usato"> Usato
    <p>selezionare pagamento desiderato:</p>
    <input type="radio" name="pagamento" value="contanti"> Contanti
    <input type="radio" name="pagamento" value="carta"> Carta
    <input type="radio" name="pagamento" value="buoni"> Buono digitale
    <br>
    <br>
    <input type="submit">
   </form>
</body>
</html>