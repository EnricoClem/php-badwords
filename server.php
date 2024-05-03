<?php
$uncensored_text = $_GET['uncensored_text'];
$badword = $_GET['badword'];
$uncensored_text_lenght = strlen($uncensored_text);

$censored_text = str_replace($badword, '***', $uncensored_text, $count);
$censored_text_lenght = strlen($censored_text);
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
                <p><?php echo $uncensored_text_lenght ?></p>
            </li>
            <li>
                <h2>Il testo censurato:</h2>
                <p><?php echo $censored_text ?></p>
                <h3>Lunghezza testo censurato:</h3>
                <p><?php echo $censored_text_lenght ?></p>
                <h4>Numero di censure applicate: <?php echo $count ?></h4>
            </li>
        </ul>
    </main>
    
</body>
</html>