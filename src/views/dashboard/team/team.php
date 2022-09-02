<?php
$page = 'Team';
$pageTitle = 'Team Members';
require_once APPROOT . '/src/views/dashboard/inc/header.php';
?>

<div class="container-fluid team-members">
    <div class="row d-flex justify-content-center">
        <h1 class="text-center fw-bold mt-5 mb-5">Team Members</h1>

        <div class="card p-1 me-3 mb-3 member" style="width: 25rem;">
            <img src="<?= D_IMG_PATH ?>logo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-3">Name: <span class="member-data">Abdou Shalby</span></h5>
                <p class="card-text">Description: <span class="member-data">Some quick example text to build on the card title and make up the bulk of the card's content.</span></p>
                <div class="actions text-center mt-3 mb-4">
                    <a href="<?= URLROOT ?>member_edit" class="btn custom-button me-3"><i class="fa-solid fa-pen"></i> Edit</a>
                    <a href="#" class="btn custom-button"><i class="fa-solid fa-trash"></i> Delete</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php require_once APPROOT . '/src/views/dashboard/inc/footer.php'; ?>
