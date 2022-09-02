<?php
$page = 'Categories';
$pageTitle = 'Category | Edit';
require_once APPROOT . '/src/views/dashboard/inc/header.php';
?>
    <div class="container-fluid edit-category">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center fw-bold mt-5 mb-5">Edit Category</h1>
            <?php foreach ($data as $category) { ?>
                <form action="<?= URLROOT ?>category_update" method="POST">
                    <input type="number" value="<?= $category->Category_ID ?>" name="category_id" hidden>
                    <div class="mb-3 w-25 m-auto">
                        <label for="WorkName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="WorkName" aria-describedby="text"
                               name="category_name" value="<?= $category->Category_Name ?>" required>
                    </div>
                    <?php if (isset($_SESSION['empty_email'])) {
                        echo '<div class="alert alert-danger mb-3 w-25 m-auto" role="alert">';
                        echo $_SESSION['category_name_empty'];
                        echo '</div>';
                    } ?>
                    <div class="mb-3 w-25 m-auto">
                        <label for="WorkImage" class="form-label">Description</label>
                        <textarea class="category-description"
                                  name="category_description"><?= $category->Category_Description ?></textarea>
                    </div>
                    <div class="mb-3 w-25 m-auto">
                        <label for="WorkName" class="form-label">Visibile</label>
                        <select class="form-select" name="category_visibilty" aria-label="Default select example">
                            <option value="1" <?php if ($category->Category_Visibility == 1) {
                                echo 'selected';
                            } ?> >Yes
                            </option>
                            <option value="0" <?php if ($category->Category_Visibility == 0) {
                                echo 'selected';
                            } ?>>No
                            </option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn custom-button w-25 mt-3">Save</button>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>

<?php require_once APPROOT . '/src/views/dashboard/inc/footer.php'; ?>