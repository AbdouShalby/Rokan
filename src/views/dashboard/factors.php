<?php
$page = 'Factors';
$pageTitle = 'Factor Orders';
require_once APPROOT . '/src/views/dashboard/inc/header.php';
?>

<div class="container-fluid factor-orders">
    <div class="row d-flex justify-content-center">
        <h1 class="text-center fw-bold mt-5 mb-5">Factor Orders</h1>

        <div class="card p-1 me-3 mb-3 order" style="width: 30rem;">
            <div class="card-body">
                <span class="position-absolute stopwatch"><i class="fa-solid fa-stopwatch"></i></span>
<!--                <span class="position-absolute done"><i class="fa-solid fa-circle-check"></i></span>-->
                <h5 class="card-title mb-3">Name: <span class="client-data">Abdou Shalby</span></h5>
                <h5 class="card-title mb-3">Email: <span class="client-data">abdoushalby@gmail.com</span></h5>
                <h5 class="card-title mb-3">Mobile: <span class="client-data">01024020051</span></h5>
                <h5 class="card-title mb-3">Address: <span class="client-data">21 Abdallah Al Nadeem ST Menouf Egypt</span></h5>
                <h5 class="card-title mb-3">Service: <span class="client-data">Sabak</span></h5>
                <p class="card-text">Description: <span class="client-data">Some quick example text to build on the card title and make up the bulk of the card's content.</span></p>
                <div class="actions text-center mt-3 mb-4">
                    <a href="#" class="btn custom-button me-3"><i class="fa fa-check"></i> Mark As Read</a>
<!--                    <a href="#" class="btn custom-button me-3"><i class="fa-solid fa-check-double"></i> Mark As Done</a>-->
                    <a href="#" class="btn custom-button"><i class="fa-solid fa-trash"></i> Delete</a>
                </div>
                <span class="time position-absolute">From 4 Mints Ago</span>
            </div>
        </div>

        <div class="card p-1 me-3 mb-3 order" style="width: 30rem;">
            <div class="card-body">
<!--                <span class="position-absolute stopwatch"><i class="fa-solid fa-stopwatch"></i></span>-->
                <span class="position-absolute done"><i class="fa-solid fa-circle-check"></i></span>
                <h5 class="card-title mb-3">Name: <span class="client-data">Abdou Shalby</span></h5>
                <h5 class="card-title mb-3">Email: <span class="client-data">abdoushalby@gmail.com</span></h5>
                <h5 class="card-title mb-3">Mobile: <span class="client-data">01024020051</span></h5>
                <h5 class="card-title mb-3">Address: <span class="client-data">21 Abdallah Al Nadeem ST Menouf Egypt</span></h5>
                <h5 class="card-title mb-3">Service: <span class="client-data">Sabak</span></h5>
                <p class="card-text">Description: <span class="client-data">Some quick example text to build on the card title and make up the bulk of the card's content.</span></p>
                <div class="actions text-center mt-3 mb-4">
<!--                    <a href="#" class="btn custom-button me-3"><i class="fa fa-check"></i> Mark As Read</a>-->
<!--                    <a href="#" class="btn custom-button me-3"><i class="fa-solid fa-check-double"></i> Mark As Done</a>-->
                    <a href="#" class="btn custom-button"><i class="fa-solid fa-trash"></i> Delete</a>
                </div>
                <span class="time position-absolute">From 4 Mints Ago</span>
            </div>
        </div>

    </div>
</div>

<?php require_once APPROOT . '/src/views/dashboard/inc/footer.php'; ?>
