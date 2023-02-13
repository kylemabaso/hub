<?php
    $page = '404';
    $video = false;

    if (!isset($_GET['page'])) {
        $video = true;
        $page = 'home';
    } else {
        if (file_exists('pages/' . $_GET['page'] . '.php')) {
            $video = true;
            $page = $_GET['page'];
        }
    }
?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
<section class="hero-section position-relative pt-4">
    <?php
    if (false !== $video) {
        include('includes/'. $page .'_video.php');
    }
    ?>

    <?php include('includes/header.php'); ?>

    <!-- Content -->
    <div class="d-flex align-items-center justify-content-center h-100">
        <div class="text-center text-white">
            <h3 class="display-6">WE CRAFT</h3>
            <h1 class="display-4 text-blue">INSPIRED CAMPAIGNS</h1>
            <h3 class="display-6">THAT GO BEYOND THE DIGITAL REALM</h3>

            <a href="#scroll-down" class="scroll-down-link">
                <span class="arrow"></span>
                <span class="arrow"></span>
                <span class="arrow"></span>
            </a>
        </div>
    </div>
</section>
<div class="wave-banner"></div>

<?php
    include('pages/'. $page .'.php');
?>

<?php include('includes/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>


</html>