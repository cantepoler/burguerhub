<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/style.css">
        <title>Productes</title> <!-- TODO -->
    </head>
    <body>
        <?php
        include_once __DIR__.'/controladors/header.php';
        ?>        
        <?php include __DIR__.'/controladors/llistar_productes.php'; ?>        
    </body>
</html>