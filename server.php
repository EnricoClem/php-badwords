<?php
var_dump($_GET);

$uncensored_text = $_GET['uncensored_text'];
$badword = $_GET['badword'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cansura testi</title>
</head>
<body>

    <main>
        <ul>
            <li>
                <h2>Il testo originale:</h2>
                <p><?php echo $uncensored_text ?></p>
                <h3>Lunghezza testo originale:</h3>
                <p><?php echo $badword ?></p>
            </li>
            <li>
                <h2>Il testo censurato:</h2>
                <p></p>
                <h3>Lunghezza testo censurato:</h3>
                <p></p>
            </li>
        </ul>
    </main>
    
</body>
</html>