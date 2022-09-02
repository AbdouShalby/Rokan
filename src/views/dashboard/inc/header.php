<?php
    session_start();

    $now = time();

    if ($now > $_SESSION['expire']) {
        session_destroy();
        header('location: ' . URLROOT . 'login'); // Redirect To Login Page
        $_SESSION['finished'] = 'Session expired login again';
    }

    if (!isset($_SESSION['User_Email'])) {
        header('location: ' . URLROOT . 'login'); // Redirect To Login Page
    }

    if ($_SESSION['User_Is_Admin'] < 1) {
        session_destroy();
        header('location: ' . URLROOT . 'login'); // Redirect To Login Page
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php if (isset($pageTitle)) {
            echo '<title>' . SITENAME . ' | ' . $pageTitle . '</title>';
        } else {
            echo '<title>' . SITENAME . '</title>';
        } ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="<?= D_CSS_PATH ?>all.min.css">
        <link rel="stylesheet" href="<?= D_CSS_PATH ?>style.css">
    </head>
    <body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg pos">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav m-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'Dashboard') { echo  'active';} ?>" aria-current="page" href="<?= URLROOT ?>admin">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if ($page == 'OurWork') { echo  'active';} ?>" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Work
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= URLROOT ?>ourwork">View All</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?= URLROOT ?>ourwork_add">Add</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link <?php if ($page == 'Categories') { echo  'active';} ?>" href="<?= URLROOT ?>categories">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'Factors') { echo  'active';} ?>" href="<?= URLROOT ?>factor_orders">Factors</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if ($page == 'Finishing') { echo  'active';} ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Finishing
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= URLROOT ?>finishing_packages">Packages</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?= URLROOT ?>finishing_orders">Orders</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'Contact') { echo  'active';} ?>" href="<?= URLROOT ?>contact_messages">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'Social') { echo  'active';} ?>" href="<?= URLROOT ?>social_links">Social Links</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'Stats') { echo  'active';} ?>" href="<?= URLROOT ?>stats">Stats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'Team') { echo  'active';} ?>" href="<?= URLROOT ?>team_members">Team Members</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ms-5" href="<?= URLROOT ?>logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mode position-absolute">
        <span class="change material-symbols-outlined position-fixed"><span>dark_mode</span></span>
    </div>

    <div id="scroll-up" class="position-absolute">
        <span class="arrow-up material-symbols-outlined position-fixed"><span>arrow_upward</span></span>
    </div>
    <!-- End Navbar -->