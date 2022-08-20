<?php
$page = 'Events';
$pageTitle = 'Events';
require_once APPROOT . '/src/views/include/header.php';
?>
    <!-- Start Landing -->
    <div class="landing dance-landing d-flex justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 ps-5 text-black">
                    <h2 class="pb-2 pt-3 fs-1 fw-normal">Welcome to</h2>
                    <h1 class="pb-5 fw-bold">Haarlem Festival</h1>
                    <h2 class="fw-bold fs-1 text-center pt-5 mt-5">Dance</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="dance-details d-flex justify-content-center mt-5 mb-5 text-black">
        <div class="container">
            <h2>Passes <span class="fs-3 ms-3 me-5 fs-1">||</span> <span class="fs-4 fw-light ms-3">Take advantage of day pass and save up to 50%</span></h2>
            <div class="row">
                <div class="pass col-xl-2 ms-xl-5 col-lg-2 ms-lg-4 col-md-5 text-center mt-4 h-100">
                    <form action="<?= URLROOT; ?>/pass" method="POST">
                        <input type="number" value="29" name="29" hidden>
                        <img src="<?= IMGS_PATH;?>ticket.png" alt="Pass" class="img-fluid w-25">
                        <h2 class="fs-4">All access pass</h2>
                        <hr class="w-75 m-auto mb-3">
                        <span class="dayname d-block">Firday</span>
                        <span class="daynum d-block fs-2">29</span>
                        <span class="month-year d-block mb-3">July 2022</span>
                        <span class="price d-block mb-2">&euro; 125.00</span>
                        <button type="submit" class="btn text-decoration-none m-auto text-black fs-5 d-block mb-3">Buy pass <i class="fa fa-cart-arrow-down"></i></button>
                    </form>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-1"></div>
                <div class="pass col-xl-2 col-lg-2 col-md-5 text-center mt-4 h-100">
                    <form action="<?= URLROOT; ?>/pass" method="POST">
                        <input type="number" value="30" name="30" hidden>
                        <img src="<?= IMGS_PATH;?>ticket.png" alt="Pass" class="img-fluid w-25">
                        <h2 class="fs-4">All access pass</h2>
                        <hr class="w-75 m-auto mb-3">
                        <span class="dayname d-block">Saturday</span>
                        <span class="daynum d-block fs-2">30</span>
                        <span class="month-year d-block mb-3">July 2022</span>
                        <span class="price d-block mb-2">&euro; 150.00</span>
                        <button type="submit" class="btn text-decoration-none m-auto text-black fs-5 d-block mb-3">Buy pass <i class="fa fa-cart-arrow-down"></i></button>
                    </form>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-1"></div>
                <div class="pass col-xl-2 col-lg-2 col-md-5 text-center mt-4 h-100">
                    <form action="<?= URLROOT; ?>/pass" method="POST">
                        <input type="number" value="31" name="31" hidden>
                        <img src="<?= IMGS_PATH;?>ticket.png" alt="Pass" class="img-fluid w-25">
                        <h2 class="fs-4">All access pass</h2>
                        <hr class="w-75 m-auto mb-3">
                        <span class="dayname d-block">Sunday</span>
                        <span class="daynum d-block fs-2">31</span>
                        <span class="month-year d-block mb-3">July 2022</span>
                        <span class="price d-block mb-2">&euro; 150.00</span>
                        <button type="submit" class="btn text-decoration-none m-auto text-black fs-5 d-block mb-3">Buy pass <i class="fa fa-cart-arrow-down"></i></button>
                    </form>
                </div>
                <div class="col-xl-1 col-lg-1 col-md-1"></div>
                <div class="pass col-xl-2 col-lg-2 col-md-5 text-center mt-4 h-100">
                    <form action="<?= URLROOT; ?>/pass" method="POST">
                        <input type="text" value="all" name="all" hidden>
                        <img src="<?= IMGS_PATH;?>ticket.png" alt="Pass" class="img-fluid w-25">
                        <h2 class="fs-4">All access pass</h2>
                        <hr class="w-75 m-auto mb-3">
                        <span class="dayname d-block">Fri, Sat and Sun</span>
                        <span class="daynum d-block fs-2">29, 30, 31</span>
                        <span class="month-year d-block mb-3">July 2022</span>
                        <span class="price d-block mb-2">&euro; 250.00</span>
                        <button type="submit" class="btn text-decoration-none m-auto text-black fs-5 d-block mb-3">Buy pass <i class="fa fa-cart-arrow-down"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Landing -->

    <!-- Start Search -->
    <div class="search text-black">
        <div class="container">
            <h2 class="fs-4 d-inline ms-xl-5 me-xl-5 ms-lg-4 me-lg-4 ms-md-3 me-md-3 ms-sm-2 me-sm-2">Search</h2>
            <input type="search" placeholder="Search Artist Name" class="me-xl-5 me-lg-4 me-md-3 me-sm-2 ms-xl-5 ms-lg-4 ms-md-3">
            <select class="me-xl-5 me-lg-4 me-md-3 me-sm-2 ms-xl-5 ms-lg-4 ms-md-3">
                <option>Venue</option>
            </select>
            <input type="date">
        </div>
    </div>
    <!-- End Search -->

    <!-- Start Events -->
    <div class="events d-flex justify-content-center mt-5 mb-5 text-black">
        <div class="container">
            <?php if (empty($data)) {
                echo '<h2>No Events</h2>';
            } else {
                echo '<h2>Events</h2>';
                foreach ($data as $event) { ?>
                <div class="row mt-3 mb-3 p-2">
                    <form class="d-flex" action="<?= URLROOT; ?>/ticket_info" method="POST" enctype="multipart/form-data">
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3 ms-sm-4 me-sm-3 col-12 text-center mt-4">

                            <span class="fw-bold d-block"><?php echo date("l", strtotime($event->Event_Date)); ?></span>
                            <input type="text" hidden name="day_name" value="<?php echo date("l", strtotime($event->Event_Date)); ?>">

                            <span class="d-block daynum"><?php echo date("d", strtotime($event->Event_Date)); ?></span>
                            <input type="text" hidden name="day_num" value="<?php echo date("d", strtotime($event->Event_Date)); ?>">

                            <span class="fw-bold d-block"><?php echo date("F", strtotime($event->Event_Date)); ?> <?php echo date("Y", strtotime($event->Event_Date)); ?></span>
                            <input type="text" hidden name="month_year" value="<?php echo date("F", strtotime($event->Event_Date)); ?> <?php echo date("Y", strtotime($event->Event_Date)); ?>">

                            <span class="fw-bold d-block"><?php echo date("H:i", strtotime($event->Event_Start)); ?>-<?php echo date("H:i", strtotime($event->Event_End)); ?></span>
                            <input type="text" hidden name="start_end" value="<?php echo date("H:i", strtotime($event->Event_Start)); ?>-<?php echo date("H:i", strtotime($event->Event_End)); ?>">

                        </div>
                        <div class="col-xl-3 me-xl-5 col-lg-3 me-lg-5 mt-lg-3 col-md-3 ms-md-4 me-md-5 col-sm-8 col-12 text-center">
                            <img src="<?= IMGS_PATH;?>events/<?= $event->Event_Image; ?>" alt="Artist" value="<?= $event->Event_Image; ?>">
                            <input type="text" hidden name="image" value="<?= $event->Event_Image; ?>">
                        </div>
                        <div class="col-xl-3 col-lg-3 ps-lg-5 col-md-5 ms-md-5 ps-md-5 col-sm-12 text-sm-center mt-sm-3 col-12 text-center text-xl-start text-lg-start">
                            <h4 class="fw-bold">Artist: <?= $event->Event_Artist; ?></h4>
                            <input type="text" hidden name="artist" value="<?= $event->Event_Artist; ?>">

                            <span class="d-block">Venue: <?= $event->Event_Venue; ?></span>
                            <input type="text" hidden name="venue" value="<?= $event->Event_Venue; ?>">

                            <span class="d-block">Location: <?= $event->Event_Location; ?></span>
                            <input type="text" hidden name="location" value="<?= $event->Event_Location; ?>">

                            <span class="d-block">Session: <?= $event->Event_Session; ?></span>
                            <input type="text" hidden name="session" value="<?= $event->Event_Session; ?>">

                            <span class="d-block">Duration: <?= $event->Event_Duration; ?> min</span>
                            <input type="text" hidden name="duration" value="<?= $event->Event_Duration; ?>">

                            <span class="fs-2 d-block">&euro;<?= $event->Event_Price; ?>,00</span>
                            <input type="text" hidden name="price" value="<?= $event->Event_Price; ?>">

                        </div>
                        <div class="col-xl-3 ms-xl-3 col-lg-2 ms-lg-3 col-md-12 col-sm-12 col-12 mt-3 text-center">
                            <button type="submit" class="btn fs-5 p-2 ms-xl-5 mb-xl-5 mt-xl-4 mb-lg-5 mt-lg-5 mb-md-0 me-md-4 mb-sm-0 me-sm-4 me-4">More Information <i class="fa fa-arrow-circle-right"></i></button>
                        </form>
                    <form class="d-flex" action="<?= URLROOT; ?>/to_cart" method="POST">
                        <button type="submit" class="btn fs-5 p-2 ms-xl-5 mt-xl-3 mt-lg-3 mt-md-0 mt-sm-0">Add To Cart <i class="fa fa-cart-arrow-down"></i></button>
                    </form>
                        </div>
                </div>
            <?php }
            }?>
        </div>
    </div>
    <!-- End Events -->
<?php require_once APPROOT . '/src/views/include/footer.php'; ?>