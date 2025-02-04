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
        $codiceProiezione = $_GET["codice"];

        $sql1 = "DELETE FROM proiezioni WHERE CodProiezione = $codiceProiezione";

        if($conn->query($sql1)){
            if($conn->affected_rows > 0){
                echo "<p>Eliminazione andata a buon fine</p>";
            }else{
                echo "<p>Non è stato eliminato nulla</p>";
            } 
        }else{
            echo "<p>Errore Eliminazione</p>";
        }
    ?>

    <br>

    <a href="inserimento.html">Ritorna alla pagina HOME</a>
</body>
</html>