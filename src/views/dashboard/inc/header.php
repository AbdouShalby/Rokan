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
        <link rel="stylesheet" href="<?= D_CSS_PATH; ?>style.css">
    </head>
    <body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= URLROOT; ?>admin">Dash<span>board</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav m-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= URLROOT; ?>admin">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Work
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= URLROOT; ?>ourwork">View All</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?= URLROOT; ?>ourwork_add">Add</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?= URLROOT; ?>ourwork_edit">Edit</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="<?= URLROOT; ?>ourwork_delete">Delete</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Factors</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Finishing
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Add</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="dropdown img-drop">
                    <button class="btn btn-secondary dropdown-toggle make-bg-none user-drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="material-symbols-outlined">settings</span>
                    </button>
                    <ul class="dropdown-menu bg-dark">
                        <li><a class="dropdown-item user-drop-action" href="#">Action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item user-drop-action" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item user-drop-action" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->