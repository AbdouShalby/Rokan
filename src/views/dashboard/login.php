<?php session_start();
    if (isset($_SESSION['User_Email'])) {
        header('location: ' . URLROOT . 'admin'); // Redirect To Dashboard Page
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="<?= D_CSS_PATH ?>all.min.css">
        <link rel="stylesheet" href="<?= D_CSS_PATH ?>style.css">
    </head>
    <body>

    <div class="container-fluid login">
        <div class="row">
            <form action="<?= URLROOT ?>user_login" method="POST" class="col-3 m-auto">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                </div>
                <?php if (isset($_SESSION['empty_email'])) {
                    echo '<div class="alert alert-danger mb-3" role="alert">';
                    echo $_SESSION['empty_email'];
                    echo '</div>';
                } else if (isset($_SESSION['empty_pass'])) {
                    echo '<div class="alert alert-danger mb-3" role="alert">';
                    echo $_SESSION['empty_pass'];
                    echo '</div>';
                } else if (isset($_SESSION['wrong_data'])) {
                    echo '<div class="alert alert-danger mb-3" role="alert">';
                    echo $_SESSION['wrong_data'];
                    echo '</div>';
                } else if (isset($_SESSION['finished'])) {
                    echo '<div class="alert alert-danger mb-3" role="alert">';
                    echo $_SESSION['finished'];
                    echo '</div>';
                }?>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script defer src="<?= D_JS_PATH?>all.min.js"></script>
    </body>
</html>