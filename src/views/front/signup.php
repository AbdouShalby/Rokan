<?php
$pageTitle = 'Signup';
require_once APPROOT . '/src/views/include/header.php';
if (isset($_SESSION['user'])) { // Check If There's A Session With Your Username
    header('Location:' . URLROOT);
    exit();
}
?>

    <!-- Start User -->
    <div class="signup mt-5 mb-5 d-flex justify-content-center text-center">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12 text-black">
                    <h1 class="text-black mt-5 mb-5 text-center">Signup</h1>
                    <form class="form-horizontal" action="<?= URLROOT; ?>/store" method="POST">

                        <!-- Start First Name Field -->
                        <div class="input-group mt-5 mb-2 w-25 m-auto">
                            <input
                                class="form-control"
                                type="text"
                                name="first"
                                autocomplete="off"
                                placeholder="First Name"
                                required="required" />
                        </div>

                        <?php
                        if (isset($_SESSION['empty_first'])) {
                            echo "<div class='p-2 alert alert-danger w-25 m-auto'>". $_SESSION['empty_first'] ."</div>";
                            unset($_SESSION['empty_first']);
                        } elseif (isset($_SESSION['first_3'])) {
                            echo "<div class='p-2 alert alert-danger w-25 m-auto'>" . $_SESSION['first_3'] . "</div>";
                            unset($_SESSION['first_3']);
                        } elseif (isset($_SESSION['first_20'])) {
                            echo "<div class='p-2 alert alert-danger w-25 m-auto'>" . $_SESSION['first_20'] . "</div>";
                            unset($_SESSION['first_20']);
                        }
                        ?>
                        <!-- End First Name Field -->

                        <!-- Start First Name Field -->
                        <div class="input-group mt-4 mb-2 w-25 m-auto">
                            <input
                                class="form-control"
                                type="text"
                                name="last"
                                autocomplete="off"
                                placeholder="Last Name"
                                required="required" />
                        </div>

                        <?php
                        if (isset($_SESSION['empty_last'])) {
                            echo "<div class='p-2 alert alert-danger w-25 m-auto'>". $_SESSION['empty_last'] ."</div>";
                            unset($_SESSION['empty_last']);
                        } elseif (isset($_SESSION['last_3'])) {
                            echo "<div class='p-2 alert alert-danger w-25 m-auto'>" . $_SESSION['last_3'] . "</div>";
                            unset($_SESSION['last_3']);
                        } elseif (isset($_SESSION['last_20'])) {
                            echo "<div class='p-2 alert alert-danger w-25 m-auto'>" . $_SESSION['last_20'] . "</div>";
                            unset($_SESSION['last_20']);
                        }
                        ?>
                        <!-- End First Name Field -->

                        <!-- Start E-Mail Field -->
                        <div class="input-group mt-4 mb-2 w-25 m-auto">
                            <input
                                class="form-control"
                                type="email"
                                name="email"
                                placeholder="Email Must Be Valid"
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
                        <div class="input-group mt-4 mb-2 w-25 m-auto">
                            <input
                                class="form-control"
                                type="password"
                                name="password"
                                autocomplete="new-password"
                                placeholder="Password Must Be Hard & Complex"
                                required="required" />
                        </div>

                        <?php
                        if (isset($_SESSION['empty_pass'])) {
                            echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['empty_pass'] ."</div>";
                            unset($_SESSION['empty_pass']);
                        }
                        ?>
                        <!-- End Password Field -->

                        <!-- Start Mobile Field -->
                        <div class="input-group mb-2 mt-4 w-25 m-auto">
                            <input
                                class="form-control"
                                type="tel"
                                name="mobile"
                                placeholder="Mobile Number"
                                required="required" />
                        </div>

                        <?php
                        if (isset($_SESSION['empty_mob'])) {
                            echo "<div class='p-2 mt-2 mb-2 alert alert-danger w-25 m-auto'>". $_SESSION['empty_mob'] ."</div>";
                            unset($_SESSION['empty_mob']);
                        }
                        ?>
                        <!-- End Mobile Field -->

                        <!-- Start Submit Field -->
                        <input
                            class="btn btn-block me-1 p-2 mb-5 text-black"
                            type="submit"
                            value="Signup" />
                        <!-- End Submit Field -->
                    </form>
                    <?php
                    if (isset($_SESSION['account_created'])) {
                        echo "<div class='p-2 mt-2 mb-5 alert alert-success w-25 m-auto'>". $_SESSION['account_created'] ."</div>";
                        unset($_SESSION['account_created']);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End User -->

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>