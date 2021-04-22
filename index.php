<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>

<body>
    <?php
    $badword = $_GET["badword"];
    $aphorism = "Scegli un lavoro che ami, e non dovrai lavorare neppure un giorno in vita tua. (Confucio)";
    $newAphorism = str_replace($badword, "***", $aphorism);
    $aphorismLength = strlen($aphorism);
    $newAphorismLength = strlen($newAphorism);
    ?>
    <h1>BADWORDS</h1>
    <h2>Questo aforismo è lungo <?php echo $aphorismLength; ?> caratteri</h2>
    <p><?php echo $aphorism; ?></p>
    <h2>Questo aforismo censurato è lungo <?php echo $newAphorismLength; ?> caratteri</h2>
    <p><?php echo $newAphorism; ?></p>
</body>

</html>