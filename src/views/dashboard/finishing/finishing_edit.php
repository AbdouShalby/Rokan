<?php
$page = 'Finishing';
$pageTitle = 'Finishing Package | Edit';
require_once APPROOT . '/src/views/dashboard/inc/header.php';
?>

    <div class="container-fluid edit-category">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center fw-bold mt-5 mb-5">Edit Package</h1>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3 w-25 m-auto">
                    <label for="WorkName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="WorkName" aria-describedby="text" name="cat_name" required>
                </div>
                <div class="mb-3 w-25 m-auto">
                    <label for="WorkName" class="form-label">Price</label>
                    <input type="number" class="form-control" id="WorkName" aria-describedby="text" name="cat_name" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn custom-button w-25 mt-3">Save</button>
                </div>
            </form>
        </div>
    </div>

<?php require_once APPROOT . '/src/views/dashboard/inc/footer.php'; ?>