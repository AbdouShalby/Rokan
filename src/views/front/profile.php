<?php
$page = 'Profile';
$pageTitle = 'Profile';
require_once APPROOT . '/src/views/include/header.php';
if(isset($_SESSION['user'])){
    $firstName  = $_SESSION['User_First'];
    $lastName   = $_SESSION['User_Last'];
    $mobile     = $_SESSION['User_Mobile'];
    $admin      = $_SESSION['User_Permission'];
    ?>
    <div class="profile pt-5 text-center text-md-start m-auto">
        <div class="container">
            <div class="row p-5">
                <div class="col-12 mb-3 text-center">
                    <h2 class="fs-1 fw-bold"><?= $firstName . $lastName ?></h2>
                    <span class="d-block">Mobile Number: <?= $mobile ?></span>
                </div>
                <div class="col-12 mb-3 mt-3 text-center member">
                    <img class="img-fluid w-25" src="<?= IMGS_PATH; ?>/Avatar.png" alt="Team">
                </div>
            </div>
            <?php if ($admin == 1): ?>
                <div class="d-flex justify-content-center mt-3 mb-5">
                    <a class="btn rounded-pill main-btn text-uppercase" href="<?= URLROOT; ?>/add_event">Add Event <i class="fa-solid fa-plus"></i></a>
                </div>
            <?php endif ?>
            <div class="d-flex justify-content-center mt-3 mb-5">
                <a class="btn rounded-pill main-btn text-uppercase" href="<?= URLROOT; ?>/logout">Logout <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
            </div>
        </div>
    </div>
<?php } else {
    header('location: ' . URLROOT);
}
?>
<?php require_once APPROOT . '/src/views/include/footer.php'; ?>