<?php 
    $text = "{$_GET['Text']}";
    $censored = "{$_GET['Censored']}";
    $censoredtext = str_replace($censored,'***',$text);
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Testo normale</h1>
        <h2><?= $text ?> </h2>
        <h3>Lunghezza del testo: <?= strlen($text) ?></h3>
    </div>
    <div>
        <h1>Testo con censure</h1>
        <h2><?= $censoredtext ?></h2>
        <h3>Lunghezza del testo censurato: <?= strlen($censoredtext) ?></h3>
    </div>
</body>
</html>