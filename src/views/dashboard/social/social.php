<?php
$page = 'Social';
$pageTitle = 'Social Links';
require_once APPROOT . '/src/views/dashboard/inc/header.php';
?>

<div class="container-fluid social">
    <div class="row d-flex justify-content-center">
        <h1 class="text-center fw-bold mt-5 mb-5">Social Links</h1>

        <div class="col-9 mb-5 text-center social-links">
            <table class="table w-100 text-center m-auto mt-5">
                <thead>
                <tr class="main-tr">
                    <th scope="col">#</th>
                    <th scope="col">Social</th>
                    <th scope="col">Link</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Facebook</td>
                    <td>/abdoushalby</td>
                    <td>
                        <a href="<?= URLROOT ?>social_edit" class="btn custom-button"><i class="fa-solid fa-pen"></i> Edit</a>
                        <a href="#" class="btn custom-button ms-3"><i class="fa-solid fa-trash"></i> Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Twitter</td>
                    <td>/abdoushalby</td>
                    <td>
                        <a href="<?= URLROOT ?>social_edit" class="btn custom-button"><i class="fa-solid fa-pen"></i> Edit</a>
                        <a href="#" class="btn custom-button ms-3"><i class="fa-solid fa-trash"></i> Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Pinterest</td>
                    <td>/abdoushalby</td>
                    <td>
                        <a href="<?= URLROOT ?>social_edit" class="btn custom-button"><i class="fa-solid fa-pen"></i> Edit</a>
                        <a href="#" class="btn custom-button ms-3"><i class="fa-solid fa-trash"></i> Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Youtube</td>
                    <td>/abdoushalby</td>
                    <td>
                        <a href="<?= URLROOT ?>social_edit" class="btn custom-button"><i class="fa-solid fa-pen"></i> Edit</a>
                        <a href="#" class="btn custom-button ms-3"><i class="fa-solid fa-trash"></i> Delete</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Instagram</td>
                    <td>/abdoushalby</td>
                    <td>
                        <a href="<?= URLROOT ?>social_edit" class="btn custom-button"><i class="fa-solid fa-pen"></i> Edit</a>
                        <a href="#" class="btn custom-button ms-3"><i class="fa-solid fa-trash"></i> Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?php require_once APPROOT . '/src/views/dashboard/inc/footer.php'; ?>
