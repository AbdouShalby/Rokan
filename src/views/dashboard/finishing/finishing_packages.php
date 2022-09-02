<?php
$page = 'Finishing';
$pageTitle = 'Finishing Packages';
require_once APPROOT . '/src/views/dashboard/inc/header.php';
?>
    <div class="container-fluid finishing-packages">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center fw-bold mt-5 mb-5">Finishing Packages</h1>

            <div class="card p-1 me-3 mb-3 package" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title mb-3">Package: <span class="package-data">Package One</span></h5>
                    <h5 class="card-title mb-5">Price: <span class="package-data">$5</span></h5>
                    <div class="actions text-center mt-3 mb-4">
                        <a href="<?= URLROOT?>finishing_edit" class="btn custom-button me-3"><i class="fa-solid fa-pen"></i> Edit</a>
                        <a href="#" class="btn custom-button"><i class="fa-solid fa-trash"></i> Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once APPROOT . '/src/views/dashboard/inc/footer.php'; ?>