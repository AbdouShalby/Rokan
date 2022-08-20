<?php
$pageTitle = 'Ticket Information';
require_once APPROOT . '/src/views/include/header.php';
?>

    <!-- Start Check Out -->
    <div class="buy-ticket justify-content-center">
        <div class="container">
            <div class="row mt-5 mb-5 p-4">
                <h1 class="text-center text-xl-start text-lg-start">Purchase tickets for <?= $_POST['artist'] ?></h1>
                <div class="col-xl-8 mt-xl-3 text-xl-start col-lg-8 mt-lg-3 text-lg-start col-md-12 text-md-center mt-md-3 col-sm-12 text-sm-center mt-sm-3 col-12 text-center mt-4">
                    <span class="d-block fs-5 ms-xl-3 mt-xl-3 ms-lg-3 mt-lg-3 mt-md-3 mt-sm-5 mt-5">Date: <?= $_POST['day_name'] ?> <?= $_POST['day_num'] ?> <?= $_POST['month_year'] ?> ( <?= $_POST['start_end'] ?> )</span>
                    <span class="d-block fs-5 ms-xl-3 mt-xl-3 ms-lg-3 mt-lg-3 mt-md-3 mt-sm-5 mt-5">Duration :approx <?= $_POST['duration'] ?> min</span>
                    <span class="d-block fs-5 ms-xl-3 mt-xl-3 ms-lg-3 mt-lg-3 mt-md-3 mt-sm-5 mt-5">Location: <?= $_POST['location'] ?></span>
                    <span class="d-block fs-5 ms-xl-3 mt-xl-3 ms-lg-3 mt-lg-3 mt-md-3 mt-sm-5 mt-5">Session: <?= $_POST['session'] ?></span>
                    <span class="d-block fs-5 ms-xl-3 mt-xl-3 ms-lg-3 mt-lg-3 mt-md-3 mt-sm-5 mt-5">Venue: <?= $_POST['venue'] ?></span>
                    <span class="d-block fs-5 ms-xl-3 mt-xl-3 ms-lg-3 mt-lg-3 mt-md-3 mt-sm-5 mt-5">Tickets available: 2000</span>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 text-md-center mt-md-5 col-sm-12 text-sm-center mt-sm-5 col-12 text-center mt-5">
                    <img class="img-fluid" src="<?= IMGS_PATH;?>events/<?= $_POST['image'] ?>" alt="Artist">
                </div>
                <div class="col-12 d-flex mt-5 mb-5">
                    <img class="img-fluid ms-xl-5 ms-lg-4 ticket" src="<?= IMGS_PATH;?>ticket.png" alt="Ticket">
                    <h3 class="ms-xl-1 mt-xl-2 ms-lg-1 mt-lg-2 ms-md-2 ms-sm-1 me-3">Ticket pass for [ <?= $_POST['artist'] ?> ] event at <?= $_POST['day_num'] ?> <?= $_POST['month_year'] ?></h3>
                    <h2 class="ms-xl-5 mt-xl-2 ms-lg-3 mt-lg-2 ms-md-3 ms-sm-4 ms-3">Price: &euro;<span id="output"><?= $_POST['price'] ?></span></h2>
                </div>

                <div class="buttons text-center mt-5">
                    <button class="btn me-1 p-2" href="#">Add To Cart <i class="fa fa-cart-arrow-down"></i></button>
                    <form class="d-inline" action="<?= URLROOT; ?>/checkout" method="POST" enctype="multipart/form-data">
                        <input type="text" hidden name="artist" value="<?= $_POST['artist'] ?>">
                        <input type="text" hidden name="price" value="<?= $_POST['price'] ?>">
                        <button type="submit" class="btn p-2">Go To Checkout <i class="fa fa-arrow-circle-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Check Out -->

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>