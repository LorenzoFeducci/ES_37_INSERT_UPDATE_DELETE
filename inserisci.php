<?php
    include('connessione.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $anno = $_GET["anno"];
        $nazionalita = $_GET["nazione"];

        $sql1 = "INSERT INTO attori (Nome, AnnoNascita, Nazionalita) VALUES ('$nome', '$anno', '$nazionalita')";

        if($conn->query($sql1)){
            echo "<p>Inserimento andato a buon fine</p>";
        }else{
            echo "<p>Errore inserimento</p>";
        }
    ?>

    <br>

    <a href="inserimento.html">Ritorna alla pagina HOME</a>
</body>
</html>