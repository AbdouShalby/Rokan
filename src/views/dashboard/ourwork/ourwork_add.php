<?php
$page = 'OurWork';
$pageTitle = 'Our Work | Add';
require_once APPROOT . '/src/views/dashboard/inc/header.php';
?>

    <div class="container-fluid add-work">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center fw-bold mt-5 mb-5">Add Work</h1>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3 w-25 m-auto">
                    <label for="WorkName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="WorkName" aria-describedby="text" name="work_name" required>
                </div>
                <div class="mb-3 w-25 m-auto">
                    <label for="WorkImage" class="form-label">Image</label>
                    <button class="file-upload-button" style="display:block; width:100%; height:38px; text-align: left" onclick="document.getElementById('getFile').click()">Select Image</button>
                    <input type='file' id="getFile" style="display:none" name="work_image" required>
                </div>
                <div class="mb-3 w-25 m-auto">
                    <label for="WorkCategory" class="form-label">Category</label>
                    <select class="form-select" aria-label="Default select example" name="work_category" required>
                        <option selected value="0">Select Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3 w-25 m-auto">
                    <label for="WorkVisibility" class="form-label">Visibile</label>
                    <select class="form-select" aria-label="Default select example" name="work_visibility" required>
                        <option selected>Select Visiblity</option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn custom-button w-25 mt-3">Add</button>
                </div>
            </form>
        </div>
    </div>

<?php require_once APPROOT . '/src/views/dashboard/inc/footer.php'; ?>