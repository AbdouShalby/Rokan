<?php
$pageTitle = 'Ticket Checkout';
require_once APPROOT . '/src/views/include/header.php';
?>

    <!-- Start Check Out -->
    <div class="check-out d-flex justify-content-center">
        <div class="container">
            <div class="track">
                <div class="step active"> <span class="icon"> <i class="fa-solid fa-1"></i> </span> <span class="text">Check Out</span> </div>
                <div class="step"> <span class="icon"> <i class="fa-solid fa-2"></i> </span> <span class="text">Login</span> </div>
                <div class="step"> <span class="icon"> <i class="fa-solid fa-3"></i> </span> <span class="text">Billing</span> </div>
                <div class="step"> <span class="icon"> <i class="fa-solid fa-4"></i> </span> <span class="text">Complete</span> </div>
            </div>
            <div class="row">
                <h1 class="text-black mt-5">Check Out</h1>
                <form action="<?= URLROOT; ?>/checkout_login" method="POST">
                    <div class="data mb-5 text-black">
                        <div class="row d-flex mt-5 mb-5">
                            <i class="fa-solid fa-ticket col-xl-1 ms-xl-4 ticket"></i>
                            <h3 class="col-xl-6 "><?= $_POST['artist']; ?></h3>
                            <input type="text" hidden name="ticket_for" value="<?= $_POST['artist'] ?>">
                            <div class="number-input col-xl-1">
                                <input type="number" id="number" min="1" value="1" name="ticket_count" onchange="document.getElementById('output').innerHTML = (this.value * <?= $_POST['price']; ?>)">
                            </div>
                            <h2 class="col-xl-3">Total Price: &euro;<span id="output"><?= $_POST['price']; ?></span></h2>
                            <a class="col-xl-1 btn fs-3 trash" href="<?= URLROOT; ?>"><i class="fa-solid fa-trash"></i></a>
                        </div>
                        <hr class="mt-5 mb-5">
                        <div class="buttons text-center mt-5 mb-5">
                            <a class="btn me-1 p-2" href="<?= URLROOT; ?>">Cancel <i class="fa-solid fa-circle-xmark"></i></i></a>
                            <button type="submit" class="btn p-2" >Buy Now <i class="fa-solid fa-credit-card"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Check Out -->

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>