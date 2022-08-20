<?php require_once APPROOT . '/src/views/include/header.php'; ?>
    <!-- Start All Passes -->
    <div class="all-passes d-flex justify-content-center">
        <div class="container">
            <?php if (isset($_POST['29'])) { ?>
            <form action="<?= URLROOT; ?>/checkout" method="POST">
                <div class="row mt-5 mb-5 p-4">
                    <h1 class="mt-5 mb-5 fw-bold">Purchase tickets for All access pass</h1>
                    <p class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">Are you planning to attend more than one event in one day? then Access pass is the best
                        option for you. By access pass you can have the benefits of saving up to 50%. You will have access to
                        all events that are related to dance events</p>
                    <div class="pass-details col-xl-3 col-lg-3 col-md-5 m-md-auto col-sm-6 m-sm-auto text-lg-center col-8 m-auto p-4">
                        <h2 class="fs-2">All access pass</h2>
                        <span class="daynum fs-1">29</span>
                        <img src="<?= IMGS_PATH; ?>ticket.png" alt="Pass" class="img-fluid w-50">
                        <span class="month-year d-block">July 2022</span>
                    </div>
                    <div class="col-xl-12">
                        <h2 class="mt-3 mb-5 ms-0 fs-2 mt-md-5 mt-sm-5">You can visit the following events with <br>
                            <span class="fw-bold">All Access pass</span> 29 July 2022</h2>
                    </div>
                    <div class="event mb-5 p-3 row">
                        <div class="col-xl-3 mt-xl-5 col-lg-2 mt-lg-4 col-md-5 mt-md-5 text-center col-sm-12 col-12 mt-4">
                            <span class="d-block">Friday</span>
                            <span class="d-block daynum">29</span>
                            <span class="d-block mb-4">July 2022</span>
                            <span class="d-block time">20:00-02:00</span>
                        </div>
                        <div class="col-xl-5 mt-xl-4 col-lg-5 mt-lg-2 col-md-7 mt-md-3 col-sm-12 text-sm-center mt-sm-5 col-12 text-center mt-5">
                            <img src="<?= IMGS_PATH;?>artists/nicky.png" alt="Artist">
                        </div>
                        <div class="col-xl-4 mt-xl-3 col-lg-5 mt-lg-3 col-md-12 mt-md-5 text-md-center col-sm-12 text-sm-center mt-sm-5 col-12 text-center mt-5">
                            <h4 class="fw-bold">Artist: Nicky Romero / Afrojack</h4>
                            <span class="d-block">Venue: Lichtfabriek</span>
                            <span class="d-block">location: Energieplein 73, 2031 TC Haarlem</span>
                            <span class="d-block">Session: Back2Back</span>
                            <span class="d-block">Event duration approx: 360 min</span>
                        </div>
                    </div>
                    <div class="ticket d-flex text-black">
                        <img class="img-fluid ms-xl-5 ms-lg-4" src="<?= IMGS_PATH;?>ticket.png" alt="Ticket">
                        <h3 class="ms-xl-1 mt-xl-2 ms-lg-1 mt-lg-2 ms-md-2 ms-sm-1 me-3">All access pass day 29 July 2022</h3>
                        <div class="number-input ms-xl-5 mt-xl-2 ms-lg-3 mt-lg-2">
                            <input type="number" id="number" min="1" max="50" value="1"
                                   onchange="document.getElementById('output').innerHTML = (this.value * 125)">
                        </div>
                        <h2 class="ms-xl-5 mt-xl-2 ms-lg-3 mt-lg-2 ms-md-3 ms-sm-4 ms-3">Total Price: &euro;<span id="output">125</span></h2>
                    </div>
                    <div class="buttons text-center mt-5">
                        <button type="submit" class="btn p-2">Go To Checkout <i class="fa fa-arrow-circle-right"></i></button>
                    </form>

                    <form class="d-inline ms-4" action="<?= URLROOT; ?>/to_cart" method="POST">
                        <button type="submit" class="btn me-1 p-2">Add To Cart <i class="fa fa-cart-arrow-down"></i></button>
                    </form>

                    </div>
                    <p class="mt-5 text-black">General information: <br>
                        address: Patronaat Zijlsingel 2 ,2013 DN Haarlem <br>
                        E-mail: info@patronaat.nl <br>
                        Phone: <span class="ms-2">023 - 517 58 50 (office) - during office hours 10.00 u - 17.00 u</span> <br>
                        <span class="ms-5"><span class="ms-3">023 - 517 58 58 (cash desk /information number)</span></span>
                    </p>
                </div>
            <?php } elseif (isset($_POST['30'])) { ?>
            <div class="row mt-5 mb-5 p-4">
                <h1 class="mt-5 mb-5 fw-bold">Purchase tickets for All access pass</h1>
                <p class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">Are you planning to attend more than one event in one day? then Access pass is the best
                    option for you. By access pass you can have the benefits of saving up to 50%. You will have access to
                    all events that are related to dance events</p>
                <div class="pass-details col-xl-3 col-lg-3 col-md-5 m-md-auto col-sm-6 m-sm-auto text-lg-center col-8 m-auto p-4">
                    <h2 class="fs-2">All access pass</h2>
                    <span class="daynum fs-1">30</span>
                    <img src="<?= IMGS_PATH;?>ticket.png" alt="Pass" class="img-fluid w-50">
                    <span class="month-year d-block">July 2022</span>
                </div>
                <div class="col-xl-12">
                    <h2 class="mt-3 mb-5 ms-0 fs-2 mt-md-5 mt-sm-5">You can visit the following events with <br>
                        <span class="fw-bold">All Access pass</span> 30 July 2022</h2>
                </div>
                <div class="event mb-5 p-3 row">
                    <div class="col-xl-3 mt-xl-5 col-lg-2 mt-lg-4 col-md-5 mt-md-5 text-center col-sm-12 col-12 mt-4">
                        <span class="d-block">Friday</span>
                        <span class="d-block daynum">29</span>
                        <span class="d-block mb-4">July 2022</span>
                        <span class="d-block time">20:00-02:00</span>
                    </div>
                    <div class="col-xl-5 mt-xl-4 col-lg-5 mt-lg-2 col-md-7 mt-md-3 col-sm-12 text-sm-center mt-sm-5 col-12 text-center mt-5">
                        <img src="<?= IMGS_PATH;?>artists/nicky.png" alt="Artist">
                    </div>
                    <div class="col-xl-4 mt-xl-3 col-lg-5 mt-lg-3 col-md-12 mt-md-5 text-md-center col-sm-12 text-sm-center mt-sm-5 col-12 text-center mt-5">
                        <h4 class="fw-bold">Artist: Nicky Romero / Afrojack</h4>
                        <span class="d-block">Venue: Lichtfabriek</span>
                        <span class="d-block">location: Energieplein 73, 2031 TC Haarlem</span>
                        <span class="d-block">Session: Back2Back</span>
                        <span class="d-block">Event duration approx: 360 min</span>
                    </div>
                </div>
                <div class="ticket d-flex text-black">
                    <img class="img-fluid ms-xl-5 ms-lg-4" src="<?= IMGS_PATH;?>ticket.png" alt="Ticket">
                    <h3 class="ms-xl-1 mt-xl-2 ms-lg-1 mt-lg-2 ms-md-2 ms-sm-1 me-3">All access pass day 30 July 2022</h3>
                    <div class="number-input ms-xl-5 mt-xl-2 ms-lg-3 mt-lg-2">
                        <input type="number" id="number" min="1" max="50" value="1"
                               onchange="document.getElementById('output').innerHTML = (this.value * 150)">
                    </div>
                    <h2 class="ms-xl-5 mt-xl-2 ms-lg-3 mt-lg-2 ms-md-3 ms-sm-4 ms-3">Total Price: &euro;<span id="output">150</span></h2>
                </div>
                <div class="buttons text-center mt-5">
                    <a class="btn me-1 p-2" href="#">Add To Cart <i class="fa fa-cart-arrow-down"></i></a>
                    <a class="btn p-2" href="#">Go To Checkout <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <p class="mt-5 text-black">General information: <br>
                    address: Patronaat Zijlsingel 2 ,2013 DN Haarlem <br>
                    E-mail: info@patronaat.nl <br>
                    Phone: <span class="ms-2">023 - 517 58 50 (office) - during office hours 10.00 u - 17.00 u</span> <br>
                    <span class="ms-5"><span class="ms-3">023 - 517 58 58 (cash desk /information number)</span></span>
                </p>
            </div>
            <?php } elseif (isset($_POST['31'])) { ?>
            <div class="row mt-5 mb-5 p-4">
                <h1 class="mt-5 mb-5 fw-bold">Purchase tickets for All access pass</h1>
                <p class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">Are you planning to attend more than one event in one day? then Access pass is the best
                    option for you. By access pass you can have the benefits of saving up to 50%. You will have access to
                    all events that are related to dance events</p>
                <div class="pass-details col-xl-3 col-lg-3 col-md-5 m-md-auto col-sm-6 m-sm-auto text-lg-center col-8 m-auto p-4">
                    <h2 class="fs-2">All access pass</h2>
                    <span class="daynum fs-1">31</span>
                    <img src="<?= IMGS_PATH;?>ticket.png" alt="Pass" class="img-fluid w-50">
                    <span class="month-year d-block">July 2022</span>
                </div>
                <div class="col-xl-12">
                    <h2 class="mt-3 mb-5 ms-0 fs-2 mt-md-5 mt-sm-5">You can visit the following events with <br>
                        <span class="fw-bold">All Access pass</span> 31 July 2022</h2>
                </div>
                <div class="event mb-5 p-3 row">
                    <div class="col-xl-3 mt-xl-5 col-lg-2 mt-lg-4 col-md-5 mt-md-5 text-center col-sm-12 col-12 mt-4">
                        <span class="d-block">Friday</span>
                        <span class="d-block daynum">29</span>
                        <span class="d-block mb-4">July 2022</span>
                        <span class="d-block time">20:00-02:00</span>
                    </div>
                    <div class="col-xl-5 mt-xl-4 col-lg-5 mt-lg-2 col-md-7 mt-md-3 col-sm-12 text-sm-center mt-sm-5 col-12 text-center mt-5">
                        <img src="<?= IMGS_PATH;?>artists/nicky.png" alt="Artist">
                    </div>
                    <div class="col-xl-4 mt-xl-3 col-lg-5 mt-lg-3 col-md-12 mt-md-5 text-md-center col-sm-12 text-sm-center mt-sm-5 col-12 text-center mt-5">
                        <h4 class="fw-bold">Artist: Nicky Romero / Afrojack</h4>
                        <span class="d-block">Venue: Lichtfabriek</span>
                        <span class="d-block">location: Energieplein 73, 2031 TC Haarlem</span>
                        <span class="d-block">Session: Back2Back</span>
                        <span class="d-block">Event duration approx: 360 min</span>
                    </div>
                </div>
                <div class="ticket d-flex text-black">
                    <img class="img-fluid ms-xl-5 ms-lg-4" src="<?= IMGS_PATH;?>ticket.png" alt="Ticket">
                    <h3 class="ms-xl-1 mt-xl-2 ms-lg-1 mt-lg-2 ms-md-2 ms-sm-1 me-3">All access pass day 31 July 2022</h3>
                    <div class="number-input ms-xl-5 mt-xl-2 ms-lg-3 mt-lg-2">
                        <input type="number" id="number" min="1" max="50" value="1"
                               onchange="document.getElementById('output').innerHTML = (this.value * 150)">
                    </div>
                    <h2 class="ms-xl-5 mt-xl-2 ms-lg-3 mt-lg-2 ms-md-3 ms-sm-4 ms-3">Total Price: &euro;<span id="output">150</span></h2>
                </div>
                <div class="buttons text-center mt-5">
                    <a class="btn me-1 p-2" href="#">Add To Cart <i class="fa fa-cart-arrow-down"></i></a>
                    <a class="btn p-2" href="#">Go To Checkout <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <p class="mt-5 text-black">General information: <br>
                    address: Patronaat Zijlsingel 2 ,2013 DN Haarlem <br>
                    E-mail: info@patronaat.nl <br>
                    Phone: <span class="ms-2">023 - 517 58 50 (office) - during office hours 10.00 u - 17.00 u</span> <br>
                    <span class="ms-5"><span class="ms-3">023 - 517 58 58 (cash desk /information number)</span></span>
                </p>
            </div>
            <?php } elseif (isset($_POST['all'])) { ?>
            <div class="row mt-5 mb-5 p-4">
                <h1 class="mt-5 mb-5 fw-bold">Purchase tickets for All access pass</h1>
                <p class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">Are you planning to attend more than one event in one day? then Access pass is the best
                    option for you. By access pass you can have the benefits of saving up to 50%. You will have access to
                    all events that are related to dance events</p>
                <div class="pass-details col-xl-3 col-lg-3 col-md-5 m-md-auto col-sm-6 m-sm-auto text-lg-center col-8 m-auto p-4">
                    <h2 class="fs-2">All access pass</h2>
                    <span class="daynum fs-3">29, 30, 31</span>
                    <img src="<?= IMGS_PATH;?>ticket.png" alt="Pass" class="img-fluid w-50">
                    <span class="month-year d-block">July 2022</span>
                </div>
                <div class="col-xl-12">
                    <h2 class="mt-3 mb-5 ms-0 fs-2 mt-md-5 mt-sm-5">You can visit the following events with <br>
                        <span class="fw-bold">All Access pass</span> 29, 30, 31 July 2022</h2>
                </div>
                <div class="event mb-5 p-3 row">
                    <div class="col-xl-3 mt-xl-5 col-lg-2 mt-lg-4 col-md-5 mt-md-5 text-center col-sm-12 col-12 mt-4">
                        <span class="d-block">Friday</span>
                        <span class="d-block daynum">29</span>
                        <span class="d-block mb-4">July 2022</span>
                        <span class="d-block time">20:00-02:00</span>
                    </div>
                    <div class="col-xl-5 mt-xl-4 col-lg-5 mt-lg-2 col-md-7 mt-md-3 col-sm-12 text-sm-center mt-sm-5 col-12 text-center mt-5">
                        <img src="<?= IMGS_PATH;?>artists/nicky.png" alt="Artist">
                    </div>
                    <div class="col-xl-4 mt-xl-3 col-lg-5 mt-lg-3 col-md-12 mt-md-5 text-md-center col-sm-12 text-sm-center mt-sm-5 col-12 text-center mt-5">
                        <h4 class="fw-bold">Artist: Nicky Romero / Afrojack</h4>
                        <span class="d-block">Venue: Lichtfabriek</span>
                        <span class="d-block">location: Energieplein 73, 2031 TC Haarlem</span>
                        <span class="d-block">Session: Back2Back</span>
                        <span class="d-block">Event duration approx: 360 min</span>
                    </div>
                </div>
                <div class="ticket d-flex text-black">
                    <img class="img-fluid ms-xl-5 ms-lg-4" src="<?= IMGS_PATH;?>ticket.png" alt="Ticket">
                    <h3 class="ms-xl-1 mt-xl-2 ms-lg-1 mt-lg-2 ms-md-2 ms-sm-1 me-3">All access pass days 29, 30, 31 July 2022</h3>
                    <div class="number-input ms-xl-5 mt-xl-2 ms-lg-3 mt-lg-2">
                        <input type="number" id="number" min="1" max="50" value="1"
                               onchange="document.getElementById('output').innerHTML = (this.value * 250)">
                    </div>
                    <h2 class="ms-xl-5 mt-xl-2 ms-lg-3 mt-lg-2 ms-md-3 ms-sm-4 ms-3">Total Price: &euro;<span id="output">250</span></h2>
                </div>
                <div class="buttons text-center mt-5">
                    <a class="btn me-1 p-2" href="#">Add To Cart <i class="fa fa-cart-arrow-down"></i></a>
                    <a class="btn p-2" href="#">Go To Checkout <i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <p class="mt-5 text-black">General information: <br>
                    address: Patronaat Zijlsingel 2 ,2013 DN Haarlem <br>
                    E-mail: info@patronaat.nl <br>
                    Phone: <span class="ms-2">023 - 517 58 50 (office) - during office hours 10.00 u - 17.00 u</span> <br>
                    <span class="ms-5"><span class="ms-3">023 - 517 58 58 (cash desk /information number)</span></span>
                </p>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- End All Passes -->
<?php require_once APPROOT . '/src/views/include/footer.php'; ?>
