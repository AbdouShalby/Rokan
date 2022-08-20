<?php
$page = 'Login';
$pageTitle = 'Login';
require_once APPROOT . '/src/views/include/header.php';
if (isset($_SESSION['user'])) { // Check If There's A Session With Your Username
    header('Location:' . URLROOT);
    exit();
}
?>

    <!-- Start User -->
    <div class="login mt-5 mb-5 d-flex justify-content-center text-center">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12 text-black">
                    <h1 class="text-black mt-5 mb-5 text-center">Login</h1>
                    <!-- Start Login Form -->
                    <form class="text-center" action="<?= URLROOT; ?>/user_login" method="POST">

                        <!-- Start E-Mail Field -->
                        <div class="input-group mb-2 mt-4 w-25 m-auto">
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
                        <div class="input-group mt-4 mb-2 w-25 m-auto">
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

                        <!-- Start Forgot Redirect -->
                        <div class="mb-5 fs-6">
                            <span>Have You </span><a href="<?= URLROOT; ?>/forgot">Forgotten Your Password?</a>
                        </div>
                        <!-- End Forgot Redirect -->

                        <!-- Start Signup Redirect -->
                        <div class="mb-5 fs-6">
                            <span>Or <a href="<?= URLROOT; ?>/signup">Signup</a> To Make Aa Account</span>
                        </div>
                        <!-- End Signup Redirect -->

                            <input
                                class="btn btn-block me-1 p-2 mb-5 text-black"
                                type="submit"
                                value="Login" />
                        <?php
                        if (isset($_SESSION['wrong_data'])) {
                            echo "<div class='p-2 mt-2 mb-5 alert alert-danger w-50 m-auto'>". $_SESSION['wrong_data'] ."</div>";
                            unset($_SESSION['wrong_data']);
                        }
                        ?>
                    </form>
                    <!-- End Login Form -->
                </div>
            </div>
        </div>
    </div>
    <!-- End User -->

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>