<?php
$pageTitle = 'Ticket Checkout Login';
require_once APPROOT . '/src/views/include/header.php';
if (!isset($_SESSION['user'])) { // Check If There's A Session With Your Username
    if (!isset($_SESSION['guest_email'])) { // Check If There's A Session With Your Username
        header('Location:' . URLROOT);
        exit();
    } ?>
        <!-- Start Check Out Complete -->
        <div class="check-out-complete d-flex justify-content-center">
            <div class="container">
                <div class="track">
                    <div class="step done"> <span class="icon"> <i class="fa-solid fa-check"></i> </span> <span class="text">Check Out</span> </div>
                    <div class="step done"> <span class="icon"> <i class="fa-solid fa-check"></i> </span> <span class="text">Login</span> </div>
                    <div class="step done"> <span class="icon"> <i class="fa-solid fa-check"></i> </span> <span class="text">Billing</span> </div>
                    <div class="step done"> <span class="icon"> <i class="fa-solid fa-check"></i> </span> <span class="text">Complete</span> </div>
                </div>
                <div class="row mb-5 text-black">
                    <div class="complete p-5 row text-center">
                        <h1 class="col-12">Thank You For Your Purchase</h1>
                        <h2 class="col-12">You Purchase <?= $_SESSION['ticket_count'];?> Tickets <br> For [ <?= $_SESSION['ticket_for'];?> ] Event</h2>
                        <p class="mt-5 mb-0 text-center">An ticket confirmation will be sent to you on <br> <span class="fw-bold text-black-50 text-decoration-underline">
                                <?php if (isset($_SESSION['user'])) {
                                    echo $_SESSION['user'];
                                } elseif (isset($_SESSION['guest_email'])) {
                                    echo $_SESSION['guest_email'];
                                }
                                ?>
                            </span></p>
                        <p>We hope to have a nice time.</p>
                        <span class="img"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Check Out Complete -->

    <?php
    require_once APPROOT . '/src/views/include/footer.php';
    if (isset($_SESSION['guest_email'])) {
        unset($_SESSION['guest_email']);
    }
    if (isset($_SESSION['ticket_for'])) {
        unset($_SESSION['ticket_for']);
    }
    if (isset($_SESSION['ticket_count'])) {
        unset($_SESSION['ticket_count']);
    }
} else { ?>
    <!-- Start Check Out Complete -->
    <div class="check-out-complete d-flex justify-content-center">
        <div class="container">
            <?php print_r($_SESSION); ?>
            <?php print_r($_POST); ?>
            <div class="track">
                <div class="step done"> <span class="icon"> <i class="fa-solid fa-check"></i> </span> <span class="text">Check Out</span> </div>
                <div class="step done"> <span class="icon"> <i class="fa-solid fa-check"></i> </span> <span class="text">Login</span> </div>
                <div class="step done"> <span class="icon"> <i class="fa-solid fa-check"></i> </span> <span class="text">Billing</span> </div>
                <div class="step done"> <span class="icon"> <i class="fa-solid fa-check"></i> </span> <span class="text">Complete</span> </div>
            </div>
            <div class="row mb-5 text-black">
                <div class="complete p-5 row text-center">
                    <h1 class="col-12">Thank You For Your Purchase</h1>
                    <h2 class="col-12">You Purchase <?= $_SESSION['ticket_count'];?> Tickets <br> For [ <?= $_SESSION['ticket_for'];?> ] Event</h2>
                    <p class="mt-5 mb-0 text-center">An ticket confirmation will be sent to you on <br> <span class="fw-bold text-black-50 text-decoration-underline">
                                <?php if (isset($_SESSION['user'])) {
                                    echo $_SESSION['user'];
                                } elseif (isset($_SESSION['guest_email'])) {
                                    echo $_SESSION['guest_email'];
                                }
                                ?>
                            </span></p>
                    <p>We hope to have a nice time.</p>
                    <span class="img"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- End Check Out Complete -->
    <?php require_once APPROOT . '/src/views/include/footer.php'; ?>
<?php }
?>