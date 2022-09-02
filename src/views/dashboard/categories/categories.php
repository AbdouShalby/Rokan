<?php
$page = 'Categories';
$pageTitle = 'Categories';
require_once APPROOT . '/src/views/dashboard/inc/header.php';
?>
    <div class="container-fluid categories">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center fw-bold mt-5 mb-5">Categories</h1>

            <?php foreach ($data as $category) { ?>
                <div class="card p-1 me-3 mb-3" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Name: <span class="category-data"><?= $category->Category_Name ?></span></h5>
                        <?php if (strlen($category->Category_Description) >0 ) { ?>
                        <p class="card-text">Description: <span class="category-data"><?= $category->Category_Description ?></span></p>
                        <?php } else { ?>
                        <p class="card-text">Description: <span class="category-data">No Description</span></p>
                        <?php }
                        if ($category->Category_Visibility > 0) { ?>
                        <h5 class="card-title mb-3">Visible: <span class="category-data">Yes</span></h5>
                        <?php } else { ?>
                        <h5 class="card-title mb-3">Visible: <span class="category-data">No</span></h5>
                        <?php } ?>
                        <div class="actions text-center mt-5 mb-4">
                            <form class="d-inline" action="<?= URLROOT?>category_edit" method="POST">
                                <input type="number" name="Category_ID" value="<?= $category->Category_ID ?>" hidden>
                                <button type="submit" class="btn custom-button me-3"><i class="fa-solid fa-pen"></i> Edit</button>
                            </form>
                            <form class="d-inline" action="<?= URLROOT?>category_delete" method="POST">
                                <input type="number" name="Category_ID" value="<?= $category->Category_ID ?>" hidden>
                                <button type="submit" class="btn custom-button me-3"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<?php require_once APPROOT . '/src/views/dashboard/inc/footer.php'; ?>