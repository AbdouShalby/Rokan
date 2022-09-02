<?php
$page = 'Stats';
$pageTitle = 'Stats And Numbers';
require_once APPROOT . '/src/views/dashboard/inc/header.php';
?>
    <div class="container-fluid stats-numbers">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center fw-bold mt-5 mb-5">Stats And Numbers</h1>

            <div class="card p-1 me-3 mb-3 stats" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title mb-3">Statistic: <span class="package-data">Projects Completed</span></h5>
                    <h5 class="card-title mb-5">Number: <span class="package-data">50</span></h5>
                    <div class="actions text-center mt-3 mb-4">
                        <a href="<?= URLROOT?>stats_edit" class="btn custom-button me-3"><i class="fa-solid fa-pen"></i> Edit</a>
                        <a href="#" class="btn custom-button"><i class="fa-solid fa-trash"></i> Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once APPROOT . '/src/views/dashboard/inc/footer.php'; ?>