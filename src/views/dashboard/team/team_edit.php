<?php
$page = 'Team';
$pageTitle = 'Team Members | Edit';
require_once APPROOT . '/src/views/dashboard/inc/header.php';
?>

    <div class="container-fluid team-edit">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center fw-bold mt-5 mb-5">Edit Member</h1>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3 w-25 m-auto">
                    <label for="WorkName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="WorkName" aria-describedby="text" name="work_name" required>
                </div>
                <div class="mb-3 w-25 m-auto">
                    <label for="WorkImage" class="form-label">Description</label>
                    <input type='file' id="getFile" style="display:none" name="cat_desc" required>
                    <textarea class="team-description" name="cat_desc"></textarea>
                </div>
                <div class="mb-3 w-25 m-auto">
                    <label for="WorkImage" class="form-label">Image</label>
                    <button class="file-upload-button" style="display:block; width:100%; height:38px; text-align: left" onclick="document.getElementById('getFile').click()">Select Image</button>
                    <input type='file' id="getFile" style="display:none" name="work_image" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn custom-button w-25 mt-3">Save</button>
                </div>
            </form>
        </div>
    </div>

<?php require_once APPROOT . '/src/views/dashboard/inc/footer.php'; ?>