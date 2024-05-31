<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La chocolaterie la rouvière propose une multitude de produits autour du chocolat">
    <link rel="shortcut icon" href="../../assets/images/favicon/logo-chocolaterie.ico" type="image/x-icon">
    <title><?= !empty($title) ? $title : $title_default ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lustria&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php 
    if ($name !== "login" && $name !== "dashboard") {
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . '/Components/header.php';
    }
    ?>
    <?= $content ?>
    <?php     
    if ($name !== "login" && $name !== "dashboard") {
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . '/Components/footer.php';
    }
    ?>
    <script src="https://kit.fontawesome.com/9f06e862eb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>