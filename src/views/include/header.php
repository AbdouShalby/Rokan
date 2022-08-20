<!DOCTYPE html>
<html lang="en">
    <head>
        <?php if (isset($pageTitle)) {
            echo '<title>' . SITENAME . ' | ' . $pageTitle . '</title>';
        } else {
            echo '<title>' . SITENAME . '</title>';
        } ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?= PUBLIC_PATH; ?>fontawesome-free-6.0.0-beta3-web/css/fontawesome.css" rel="stylesheet">
        <link href="<?= PUBLIC_PATH; ?>fontawesome-free-6.0.0-beta3-web/css/brands.css" rel="stylesheet">
        <link href="<?= PUBLIC_PATH; ?>fontawesome-free-6.0.0-beta3-web/css/solid.css" rel="stylesheet">
        <link href="<?= PUBLIC_PATH; ?>fontawesome-free-6.0.0-beta3-web/css/regular.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700i,900|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?= FONTS_PATH; ?>icomoon/style.css">
        <link rel="stylesheet" href="<?= CSS_PATH; ?>bootstrap.min.css">
        <link rel="stylesheet" href="<?= CSS_PATH; ?>animate.min.css">
        <link rel="stylesheet" href="<?= CSS_PATH; ?>owl.carousel.min.css">
        <link rel="stylesheet" href="<?= CSS_PATH; ?>owl.theme.default.min.css">
        <link rel="stylesheet" href="<?= CSS_PATH; ?>style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>

    <!-- Start Navbar -->
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-2">
                <a href="<?= URLROOT; ?>">
                    <img src="<?= IMG_PATH; ?>logo3.jpg" class="headerLogo" alt="Brand">
                </a>
            </div>
            <div class="col-lg-7">
                <div class="navbar" >
                    <ul>
                        <a href="<?= URLROOT; ?>"><li>home</li></a>
                        <a href="<?= URLROOT; ?>factors"><li>factors</li></a>
                        <a href="<?= URLROOT; ?>finishing"><li>finishing</li></a>
                        <a href="<?= URLROOT; ?>contact"><li>contact</li></a>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="socialMedia">
                    <a href="<?= YOUTUBE_LINK; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="<?= INSTAGRAM_LINK; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="<?= PINTEREST_LINK; ?>" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                    <a href="<?= FACEBOOK_LINK; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar -->