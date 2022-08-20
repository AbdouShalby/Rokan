<?php
$pageTitle = 'Home';
require_once APPROOT . '/src/views/include/header.php';
?>
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="overlay-carousel">
                    <h1> Egy Care</h1>
                    <p>Lorem ipsum dolor sit amet dolor sit amet quaerat unde sunt</p>
                    <a>Click Me!</a>
                </div>
                <img src="<?= IMG_PATH; ?>post9.jpeg" alt="Los Angeles" width="1100" height="500">

            </div>
            <div class="carousel-item">
                <div class="overlay-carousel">
                    <h1> Egy Care</h1>
                    <p>Lorem ipsum dolor sit amet dolor sit amet quaerat unde sunt</p>
                    <a>Click Me!</a>
                </div>
                <img src="<?= IMG_PATH; ?>post7.jpeg" alt="Chicago" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <div class="overlay-carousel">
                    <h1> Egy Care</h1>
                    <p>Lorem ipsum dolor sit amet dolor sit amet quaerat unde sunt</p>
                    <a>Click Me!</a>
                </div>
                <img src="<?= IMG_PATH; ?>post6.jpeg" alt="New York" width="1100" height="500">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


    <div class="site-section">
        <div class="auto-container">
            <div class="row mb-5 align-items-center">
                <div class="col-md-7">
                    <h2 class="heading-39291 mb-0">Our Work</h2>
                </div>
                <div class="col-md-5 text-right">
                    <p class="mb-0"><a href="<?= URLROOT; ?>gallery" class="more-39291">View All Works</a></p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="media-02819">
                        <a href="#" class="img-link"><img src="<?= IMG_PATH; ?>img_1.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Creative Modern House</a></h3>
                        <span>New York City, USA</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="media-02819">
                        <a href="#" class="img-link"><img src="<?= IMG_PATH; ?>img_2.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Creative Modern House</a></h3>
                        <span>New York City, USA</span>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="media-02819">
                        <a href="#" class="img-link"><img src="<?= IMG_PATH; ?>img_3.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Creative Modern House</a></h3>
                        <span>New York City, USA</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="media-02819">
                        <a href="#" class="img-link"><img src="<?= IMG_PATH; ?>img_4.jpg" alt="Image" class="img-fluid"></a>
                        <h3><a href="#">Creative Modern House</a></h3>
                        <span>New York City, USA</span>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <section class="text-center icons">
        <h1>Performance</h1>
        <p>Convenire gubergren ex vix. Habeo facete pri</p>
        <hr class="hr5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-1">
                    <i class="far fa-check-circle"></i>
                    <div>
                        <h3>vix Habeo facete pri</h3>
                        <p>Convenire gubergren ex vix. Habeo fa
                            Convenire gubergren ex vix. Habeo fa
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-1">
                    <i class="fas fa-hard-hat"></i>
                    <div>
                        <h3>vix Habeo facete pri</h3>
                        <p>Convenire gubergren ex vix. Habeo fa
                            Convenire gubergren ex vix. Habeo fa
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-1">
                    <i class="fas fa-paint-brush"></i>
                    <div>
                        <h3>vix Habeo facete pri</h3>
                        <p>Convenire gubergren ex vix. Habeo fa
                            Convenire gubergren ex vix. Habeo fa
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-1">
                    <i class="far fa-smile"></i>
                    <div>
                        <h3>vix Habeo facete pri</h3>
                        <p>Convenire gubergren ex vix. Habeo fa
                            Convenire gubergren ex vix. Habeo fa
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-1">
                    <i class="far fa-calendar-check"></i>
                    <div>
                        <h3>vix Habeo facete pri</h3>
                        <p>Convenire gubergren ex vix. Habeo fa
                            Convenire gubergren ex vix. Habeo fa
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-1">
                    <i class="far fa-eye"></i>
                    <div>
                        <h3>vix Habeo facete pri</h3>
                        <p>Convenire gubergren ex vix. Habeo fa
                            Convenire gubergren ex vix. Habeo fa
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="counter-section">
        <div class="pattern-layer" style="background-image:url(<?= IMG_PATH; ?>pattern-5.png)"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="inner-title">
                    <div class="title">Quality of work</div>
                    <h2>Stats And Numbers.</h2>
                </div>
            </div>

            <div class="clearfix">

                <!-- Counter Block -->
                <div class="counter-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box row">
                        <div class="image">
                            <img src="<?= IMG_PATH; ?>counter-1.jpg" alt="projects completed">
                        </div>
                        <div class="content-box">
                            <div class="count-box counted">
                                <span class="count-text num" data-goal="310">0</span>
                            </div>
                            <div class="text">projects completed</div>
                        </div>
                    </div>
                </div>

                <!-- Counter Block -->
                <div class="counter-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box row">
                        <div class="content-box">
                            <div class="text-black-50">Working</div>
                            <div class="count-box counted">
                                <span class="count-text num" data-goal="24">0</span>
                            </div>
                            <div class="text">Hours</div>
                        </div>
                        <div class="image">
                            <img src="<?= IMG_PATH; ?>counter-2.jpg" alt="crazy thinkers">
                        </div>
                    </div>
                </div>

                <!-- Counter Block -->
                <div class="counter-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box row">
                        <div class="image">
                            <img src="<?= IMG_PATH; ?>counter-3.jpg" alt="Years of expertise">
                        </div>
                        <div class="content-box">
                            <div class="count-box counted">
                                <span class="count-text num" data-speed="30" data-goal="25">0</span>
                            </div>
                            <div class="text">Years of expertise</div>
                        </div>
                    </div>
                </div>

                <!-- Counter Block -->
                <div class="counter-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box row">
                        <div class="content-box">
                            <div class="count-box counted">
                                <span class="count-text num" data-speed="30" data-goal="7">0</span>
                            </div>
                            <div class="text">Days Of The Week</div>
                        </div>
                        <div class="image">
                            <img src="<?= IMG_PATH; ?>counter-4.jpg" alt="hours of work">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="painters">
        <div class="auto-container marginTop">
            <div class="row mb-5">
                <div class="col-lg-4 col-md-1">
                    <h2 class="finishingh2">Finishing</h2>
                    <hr>
                    <p class="finishing">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                    </p>
                </div>
                <div class="col-lg-4 col-md-1"><img src="<?= IMG_PATH; ?>factor.jpg " class="painter" alt="Finishing"></div>
                <div class="col-lg-4 col-md-1">
                    <h2 class="finishingh2">Quality</h2>
                    <hr>
                    <p class="finishing">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-1">
                    <img src="<?= IMG_PATH; ?>home.jpg" class="home painter" alt="Supervising">
                </div>
                <div class="col-lg-4 col-md-1">
                    <h2 class="finishingh2">Supervising</h2>
                    <hr>
                    <p class="finishing">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                    </p>
                </div>
                <div class="col-lg-4 col-md-1">
                    <img src="<?= IMG_PATH; ?>home2.jpg" class="home painter" alt="Supervising">
                </div>
            </div>
        </div>
    </section>

<?php require_once APPROOT . '/src/views/include/team.php'; ?>

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>