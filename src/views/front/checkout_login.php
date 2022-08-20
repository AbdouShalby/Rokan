<?php
$pageTitle = 'Ticket Checkout Login';
require_once APPROOT . '/src/views/include/header.php';
if (isset($_SESSION['user'])) { // Check If There's A Session With Your Username
    if (isset($_POST['ticket_for'])) {
        $_SESSION['ticket_for'] = $_POST['ticket_for'];
    }
    if (isset($_POST['ticket_count'])) {
        $_SESSION['ticket_count'] = $_POST['ticket_count'];
    }
    header('Location:' . URLROOT . '/checkout_billing');
    exit();
}
?>

    <!-- Start Check Out Login -->
    <div class="check-out-login d-flex justify-content-center">
        <div class="container">
            <div class="track">
                <div class="step done"> <span class="icon"> <i class="fa-solid fa-check"></i> </span> <span class="text">Check Out</span> </div>
                <div class="step active"> <span class="icon"> <i class="fa-solid fa-2"></i> </span> <span class="text">Login</span> </div>
                <div class="step"> <span class="icon"> <i class="fa-solid fa-3"></i> </span> <span class="text">Billing</span> </div>
                <div class="step"> <span class="icon"> <i class="fa-solid fa-4"></i> </span> <span class="text">Complete</span> </div>
            </div>
            <div class="row mb-5">
                <div class="login col-xl-4 ms-xl-5 me-xl-5 col-lg-4 ms-lg-5 me-lg-5 col-md-11 ms-md-5 pe-md-5 text-black">
                    <h1 class="text-black mt-5 mb-5 text-center">Login</h1>
                    <!-- Start Login Form -->
                    <form action="<?= URLROOT; ?>/checkout_user_login" method="POST">

                        <!-- Start E-Mail Field -->
                        <div class="input-group mb-5 mt-5">
                            <input
                                    class="form-control"
                                    type="email"
                                    name="email"
                                    autocomplete="off"
                                    placeholder="name@example.com"
                                    required="required" />
                        </div>

                        <?php
                        if (isset($_SESSION['empty_email'])) {
                            echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['empty_email'] ."</div>";
                            unset($_SESSION['empty_email']);
                        }
                        ?>
                        <!-- End E-Mail Field -->

                        <!-- Start Password Field -->
                        <div class="input-group mb-5">
                            <input
                                    class="form-control"
                                    type="password"
                                    name="password"
                                    autocomplete="new-password"
                                    placeholder="Password"
                                    required="required" />
                        </div>

                        <?php
                        if (isset($_SESSION['empty_pass'])) {
                            echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['empty_pass'] ."</div>";
                            unset($_SESSION['empty_pass']);
                        }
                        ?>
                        <!-- End Password Field -->

                        <div class="mb-4 fs-6">
                            <span>Have You </span><a href="<?= URLROOT; ?>/forgot">Forgotten Your Password?</a>
                        </div>

                        <div class="mb-4 fs-5">
                            <span>Or <a href="<?= URLROOT; ?>/signup">Signup</a> To Make Aa Account</span>
                        </div>

                        <?php if (isset($_POST['ticket_for'])) { ?>
                            <input type="text" hidden name="ticket_for" value="<?= $_POST['ticket_for']; ?>">
                        <?php } ?>

                        <?php if (isset($_POST['ticket_count'])) { ?>
                            <input type="text" hidden name="ticket_for" value="<?= $_POST['ticket_count']; ?>">
                        <?php } ?>

                        <div class="buttons text-center mt-5 mb-5">
                            <button class="btn me-1 p-2 text-black" type="submit">Login <i class="fa-solid fa-arrow-right-to-bracket ms-1"></i></i></button>
                        </div>
                        <?php
                        if (isset($_SESSION['wrong_data'])) {
                            echo "<div class='p-2 mt-2 mb-5 alert alert-danger w-100 m-auto'>". $_SESSION['wrong_data'] ."</div>";
                            unset($_SESSION['wrong_data']);
                        }
                        ?>
                    </form>
                    <!-- End Login Form -->
                </div>
                <div class="guest col-xl-5 ms-xl-5 col-lg-5 col-md-12 text-black">
                    <h1 class="mt-5 mb-5 text-center">Continue As A Guest</h1>
                    <h4>You Can Purchase As A Guest</h4>
                    <!-- Start Guest Form -->
                    <form action="<?= URLROOT; ?>/guest" method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">First Name</span>
                            <input type="text" class="form-control" placeholder="Martin" aria-label="FirstName" aria-describedby="basic-addon1" name="guest_first" required>
                        </div>
                        <?php
                        if (isset($_SESSION['empty_first'])) {
                            echo "<div class='p-2 mb-5 alert alert-danger m-auto'>". $_SESSION['empty_first'] ."</div>";
                            unset($_SESSION['empty_first']);
                        } elseif (isset($_SESSION['first_3'])) {
                            echo "<div class='p-2 mb-5 alert alert-danger m-auto'>" . $_SESSION['first_3'] . "</div>";
                            unset($_SESSION['first_3']);
                        } elseif (isset($_SESSION['first_20'])) {
                            echo "<div class='p-2 mb-5 alert alert-danger m-auto'>" . $_SESSION['first_20'] . "</div>";
                            unset($_SESSION['first_20']);
                        }
                        ?>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Last Name</span>
                            <input type="text" class="form-control" placeholder="Garix" aria-label="LastName" aria-describedby="basic-addon1" name="guest_last" required>
                        </div>
                        <?php
                        if (isset($_SESSION['empty_last'])) {
                            echo "<div class='p-2 mb-5 alert alert-danger m-auto'>". $_SESSION['empty_last'] ."</div>";
                            unset($_SESSION['empty_last']);
                        } elseif (isset($_SESSION['last_3'])) {
                            echo "<div class='p-2 mb-5 alert alert-danger m-auto'>" . $_SESSION['last_3'] . "</div>";
                            unset($_SESSION['last_3']);
                        } elseif (isset($_SESSION['last_20'])) {
                            echo "<div class='p-2 mb-5 alert alert-danger m-auto'>" . $_SESSION['last_20'] . "</div>";
                            unset($_SESSION['last_20']);
                        }
                        ?>

                        <div class="input-group mb-5">
                            <span class="input-group-text" id="basic-addon1">E-Mail</span>
                            <input type="email" class="form-control" placeholder="name@example.com" aria-label="E-Mail" aria-describedby="basic-addon1" name="guest_email" required>
                        </div>
                        <?php
                        if (isset($_SESSION['empty_email'])) {
                            echo "<div class='p-2 mb-5 mt-2 alert alert-danger m-auto'>". $_SESSION['empty_email'] ."</div>";
                            unset($_SESSION['empty_email']);
                        }
                        ?>

                        <?php if (isset($_POST['ticket_for'])) { ?>
                            <input type="text" hidden name="ticket_for" value="<?= $_POST['ticket_for']; ?>">
                        <?php } ?>

                        <?php if (isset($_POST['ticket_count'])) { ?>
                            <input type="text" hidden name="ticket_count" value="<?= $_POST['ticket_count']; ?>">
                        <?php } ?>

                        <div class="mb-3">
                            <p>If You’d Like, You Can <a href="<?= URLROOT; ?>/signup">Register</a> And Save Your Details For Future Purchases Aa The End Of The Purchase Process.</p>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">I Want To Receive Personalized Commercials Communications About Haarlem Festival By E-Mail.</label>
                        </div>

                        <div class="buttons text-center mt-5 mb-5">
                            <button class="btn me-1 p-2 text-black" type="submit">Continue As A Guest <i class="fa-solid fa-arrow-right ms-1"></i></i></button>
                        </div>
                    </form>
                    <!-- End Guest Form -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Check Out Login -->

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>