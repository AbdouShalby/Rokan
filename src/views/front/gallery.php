<?php
$page = 'Home';
require_once APPROOT . '/src/views/include/header.php';
?>

    <div class="site-section">
        <div class="auto-container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-12 text-center">
                    <h2 class="heading-39291 mb-0">Kitchens</h2>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="media-280596">
                        <a href="<?= URLROOT ?>gallery" class="img-link"><img src="<?= IMG_PATH ?>img_1.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="media-280596">
                        <a href="<?= URLROOT ?>gallery" class="img-link"><img src="<?= IMG_PATH ?>img_2.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="media-280596">
                        <a href="<?= URLROOT ?>gallery" class="img-link"><img src="<?= IMG_PATH ?>img_3.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="media-280596">
                        <a href="<?= URLROOT ?>gallery" class="img-link"><img src="<?= IMG_PATH ?>img_4.jpg" alt="Image" class="img-fluid"></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>