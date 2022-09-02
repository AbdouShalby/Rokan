<?php
$page = 'OurWork';
$pageTitle = 'Our Work';
require_once APPROOT . '/src/views/dashboard/inc/header.php';
?>
    <div class="container-fluid ourwork">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center fw-bold mt-5 mb-5">Our Work</h1>

            <div class="card p-1 me-3 mb-3" style="width: 18rem;">
                <img src="<?= D_IMG_PATH ?>logo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="actions text-center">
                        <a href="<?= URLROOT ?>ourwork_edit" class="btn custom-button me-3"><i class="fa-solid fa-pen"></i> Edit</a>
                        <a href="#" class="btn custom-button ms-3"><i class="fa-solid fa-trash"></i> Delete</a>
                    </div>
                </div>
            </div>

            <div class="card p-1 me-3 mb-3" style="width: 18rem;">
                <img src="<?= D_IMG_PATH ?>logo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="actions text-center">
                        <a href="<?= URLROOT ?>ourwork_edit" class="btn custom-button me-3"><i class="fa-solid fa-pen"></i> Edit</a>
                        <a href="#" class="btn custom-button ms-3"><i class="fa-solid fa-trash"></i> Delete</a>
                    </div>
                </div>
            </div>

            <div class="card p-1 me-3 mb-3" style="width: 18rem;">
                <img src="<?= D_IMG_PATH ?>logo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="actions text-center">
                        <a href="<?= URLROOT ?>ourwork_edit" class="btn custom-button me-3"><i class="fa-solid fa-pen"></i> Edit</a>
                        <a href="#" class="btn custom-button ms-3"><i class="fa-solid fa-trash"></i> Delete</a>
                    </div>
                </div>
            </div>

            <div class="card p-1 me-3 mb-3" style="width: 18rem;">
                <img src="<?= D_IMG_PATH ?>logo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="actions text-center">
                        <a href="<?= URLROOT ?>ourwork_edit" class="btn custom-button me-3"><i class="fa-solid fa-pen"></i> Edit</a>
                        <a href="#" class="btn custom-button ms-3"><i class="fa-solid fa-trash"></i> Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once APPROOT . '/src/views/dashboard/inc/footer.php'; ?>