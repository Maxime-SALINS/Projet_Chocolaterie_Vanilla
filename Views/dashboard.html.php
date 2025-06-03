<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../assets/images/favicon/logo-chocolaterie.ico" type="image/x-icon">
    <title><?= 'Page | ' . $title ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lustria&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.3.2/dist/css/tabler.min.css"/>
</head>

<body>
    <main class="page">
        <?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR .'/views/dashboard/menuDashboard.html.php';?>
        <section class="page-wrapper bg-body-secondary">
            <?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . '/views/dashboard/headerDashboard.html.php';?>
            <?= $content ?>
        </section>
    </main>
    
    <script src="../../assets/js/validation/RegexUserProfil.js"></script>
    <script src="https://kit.fontawesome.com/9f06e862eb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.3.2/dist/js/tabler.min.js"></script>
</body>

</html>