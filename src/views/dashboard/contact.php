<?php
$page = 'Contact';
$pageTitle = 'Contact';
require_once APPROOT . '/src/views/dashboard/inc/header.php';
?>

<div class="container-fluid contact">
    <div class="row d-flex justify-content-center">
        <h1 class="text-center fw-bold mt-5 mb-5">Contact</h1>

        <div class="card p-1 me-3 mb-3 message" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title mb-3">Name: <span class="client-data">Abdou Shalby</span></h5>
                <h5 class="card-title mb-3">Email: <span class="client-data">abdoushalby@gmail.com</span></h5>
                <p class="card-text">Message: <span class="client-data">Some quick example text to build on the card title and make up the bulk of the card's content.</span></p>
                <div class="actions text-center mt-3 mb-4">
                    <a href="#" class="btn custom-button"><i class="fa-solid fa-trash"></i> Delete</a>
                </div>
                <span class="time position-absolute">From 4 Mints Ago</span>
            </div>
        </div>

        <div class="card p-1 me-3 mb-3 message" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title mb-3">Name: <span class="client-data">Abdou Shalby</span></h5>
                <h5 class="card-title mb-3">Email: <span class="client-data">abdoushalby@gmail.com</span></h5>
                <p class="card-text">Message: <span class="client-data">Some quick example text to build on the card title and make up the bulk of the card's content.</span></p>
                <div class="actions text-center mt-3 mb-4">
                    <a href="#" class="btn custom-button"><i class="fa-solid fa-trash"></i> Delete</a>
                </div>
                <span class="time position-absolute">From 4 Mints Ago</span>
            </div>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/src/views/dashboard/inc/footer.php'; ?>
