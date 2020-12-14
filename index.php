<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $text = "benvenuto nel fantastico mondo di php";
    $length = strlen($text);
    $badwords = $_GET['badwords'];
    ?>


    <p> Ciao e <?php echo $text; ?></p>

    <p>La lunghezza di questa stringa è di <?php echo $length; ?> caratteri </p>

    <p> <?php echo $badwords; ?> a tutti </p>

    <p> <?php echo str_replace($badwords, '***', $text) ?></p>



</body>
</html>