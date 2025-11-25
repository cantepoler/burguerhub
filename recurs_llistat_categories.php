<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo BASE_URL . '/static/css/style.css'; ?>">
        <script type="text/javascript" src="<?php echo BASE_URL . '/static/js/script.js'; ?>" >  </script>
        <title>Llistat de Categories</title>
    </head>
    <body>
        <?php
        include_once __DIR__.'/controladors/header.php';
        ?>        
        <?php include __DIR__.'/controladors/llistar_categories.php'; ?>        
    </body>
</html>