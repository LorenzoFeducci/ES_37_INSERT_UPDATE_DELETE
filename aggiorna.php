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
        $idRecensione = $_GET["recensione"];
        $voto = $_GET["voto"];

        $sql1 = "UPDATE recensioni SET Voto = $voto WHERE IDRecensione = $idRecensione";

        if($conn->query($sql1)){
            if($conn->affected_rows > 0){
                echo "<p>Aggiornamento andato a buon fine</p>";
            }else{
                echo "<p>Non è stato aggiornato niente</p>";
            }
        }else{
            "<p>Errore</p>";
        }
    ?>

    <br>

    <a href="inserimento.html">Ritorna alla pagina HOME</a>
</body>
</html>