<?php
$pageTitle = 'Ticket Checkout Login';
require_once APPROOT . '/src/views/include/header.php';
if (!isset($_SESSION['user'])) { // Check If There's A Session With Your Username
    if (!isset($_SESSION['guest_email'])) { // Check If There's A Session With Your Username
        header('Location:' . URLROOT);
        exit();
    } else { ?>
        <!-- Start Check Out Login -->
        <div class="check-out-billing d-flex justify-content-center">
            <div class="container">
                <div class="track">
                    <div class="step done"> <span class="icon"><i class="fa-solid fa-check"></i> </span> <span class="text">Check Out</span> </div>
                    <div class="step done"> <span class="icon"> <i class="fa-solid fa-check"></i> </span> <span class="text">Login</span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa-solid fa-3"></i> </span> <span class="text">Billing</span> </div>
                    <div class="step"> <span class="icon"> <i class="fa-solid fa-4"></i> </span> <span class="text">Complete</span> </div>
                </div>
                <div class="row mb-5 text-black">
                    <h1 class="mt-5 mb-5">Billing</h1>
                    <div class="methods">
                        <h2 class="mt-5 mb-5">Payment Methods: </h2>
                        <form action="<?= URLROOT; ?>/checkout_complete" method="POST">
                            <div class="payment">
                                <div class="payment-select fs-1 d-inline ms-5 me-5 ps-5">
                                    <div class="payment-select-header d-inline">
                                        <div class="payment-select-radio d-inline">
                                            <input type="radio" id="iDeal" name="payment" value="iDeal" checked>
                                            <i class="fa-brands fa-ideal ms-3"></i>
                                            <label for="iDeal">iDeal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-select fs-1 d-inline ms-5 me-5">
                                    <div class="payment-select-header d-inline">
                                        <div class="payment-select-radio d-inline">
                                            <input type="radio" id="PayPal" name="payment" value="PayPal">
                                            <i class="fa-brands fa-paypal ms-3"></i>
                                            <label for="PayPal">PayPal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-select fs-1 d-inline ms-5 me-5">
                                    <div class="payment-select-header d-inline">
                                        <div class="payment-select-radio d-inline">
                                            <input type="radio" id="Credit" name="payment" value="Credit">
                                            <i class="fa-solid fa-credit-card ms-3"></i>
                                            <label for="Credit">Credit Card</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bank mt-5">
                                <h2>Bank: </h2>
                                <select name="bank_name" class="form-control w-50 mb-5 ms-5 mt-4" required>
                                    <option selected="selected" value="0">Select Bank</option>
                                    <option value="1">ALLAHABAD BANK </option>
                                    <option value="2">ANDHRA BANK</option>
                                    <option value="3">AXIS BANK</option>
                                    <option value="4">BANK OF BARODA</option>
                                    <option value="5">BANK OF INDIA</option>
                                    <option value="6">BANK OF MAHARASHTRA</option>
                                    <option value="7">CANARA BANK</option>
                                    <option value="8">STATE BANK OF INDIA</option>
                                    <option value="9">UCO BANK</option>
                                    <option value="10">UNION BANK OF INDIA</option>
                                    <option value="11">BANK OF INDIA</option>
                                    <option value="12">BANDHAN BANK LIMITED</option>
                                    <option value="13">GRAMIN VIKASH BANK</option>
                                    <option value="14">CORPORATION BANK</option>
                                    <option value="15">INDIAN BANK</option>
                                    <option value="16">INDIAN OVERSEAS BANK</option>
                                    <option value="17">ORIENTAL BANK OF COMMERCE</option>
                                    <option value="18">PUNJAB AND SIND BANK</option>
                                    <option value="19">PUNJAB NATIONAL BANK</option>
                                    <option value="20">RESERVE BANK OF INDIA</option>
                                    <option value="21">SOUTH INDIAN BANK</option>
                                    <option value="22">UNITED BANK OF INDIA</option>
                                    <option value="23">CENTRAL BANK OF INDIA</option>
                                    <option value="24">VIJAYA BANK</option>
                                    <option value="25">DENA BANK</option>
                                    <option value="26">BHARATIYA MAHILA BANK LIMITED</option>
                                    <option value="27">FEDERAL BANK LTD </option>
                                    <option value="28">HDFC BANK LTD</option>
                                    <option value="29">ICICI BANK LTD</option>
                                    <option value="30">IDBI BANK LTD</option>
                                    <option value="31">PAYTM BANK</option>
                                    <option value="32">FINO PAYMENT BANK</option>
                                    <option value="33">INDUSIND BANK LTD</option>
                                    <option value="34">KARNATAKA BANK LTD</option>
                                    <option value="35">KOTAK MAHINDRA BANK</option>
                                    <option value="36">YES BANK LTD</option>
                                    <option value="37">SYNDICATE BANK</option>
                                </select>
                            </div>

                            <?php if (isset($_SESSION['guest_email'])) { ?>
                                <input type="text" hidden name="guest_email" value="<?= $_SESSION['guest_email']; ?>">
                            <?php } ?>

                            <?php if (isset($_SESSION['ticket_for'])) { ?>
                                <input type="text" hidden name="ticket_for" value="<?= $_SESSION['ticket_for']; ?>">
                            <?php } ?>

                            <?php if (isset($_SESSION['ticket_count'])) { ?>
                                <input type="text" hidden name="ticket_count" value="<?= $_SESSION['ticket_count']; ?>">
                            <?php } ?>

                            <div class="buttons text-center mt-5 mb-5">
                                <a class="btn me-1 p-2" href="index.php">Cancel <i class="fa-solid fa-circle-xmark"></i></i></a>
                                <button class="btn p-2">Buy Now <i class="fa-solid fa-credit-card"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Check Out Login -->

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>
    <?php }
    header('Location:' . URLROOT);
    exit();
} else { ?>
        <!-- Start Check Out Login -->
        <div class="check-out-billing d-flex justify-content-center">
            <div class="container">
                <div class="track">
                    <div class="step done"> <span class="icon"><i class="fa-solid fa-check"></i> </span> <span class="text">Check Out</span> </div>
                    <div class="step done"> <span class="icon"> <i class="fa-solid fa-check"></i> </span> <span class="text">Login</span> </div>
                    <div class="step active"> <span class="icon"> <i class="fa-solid fa-3"></i> </span> <span class="text">Billing</span> </div>
                    <div class="step"> <span class="icon"> <i class="fa-solid fa-4"></i> </span> <span class="text">Complete</span> </div>
                </div>
                <div class="row mb-5 text-black">
                    <h1 class="mt-5 mb-5">Billing</h1>
                    <div class="methods">
                        <h2 class="mt-5 mb-5">Payment Methods: </h2>
                        <form action="<?= URLROOT; ?>/checkout_complete" method="POST">
                            <div class="payment">
                                <div class="payment-select fs-1 d-inline ms-5 me-5 ps-5">
                                    <div class="payment-select-header d-inline">
                                        <div class="payment-select-radio d-inline">
                                            <input type="radio" id="iDeal" name="payment" value="iDeal" checked>
                                            <i class="fa-brands fa-ideal ms-3"></i>
                                            <label for="iDeal">iDeal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-select fs-1 d-inline ms-5 me-5">
                                    <div class="payment-select-header d-inline">
                                        <div class="payment-select-radio d-inline">
                                            <input type="radio" id="PayPal" name="payment" value="PayPal">
                                            <i class="fa-brands fa-paypal ms-3"></i>
                                            <label for="PayPal">PayPal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-select fs-1 d-inline ms-5 me-5">
                                    <div class="payment-select-header d-inline">
                                        <div class="payment-select-radio d-inline">
                                            <input type="radio" id="Credit" name="payment" value="Credit">
                                            <i class="fa-solid fa-credit-card ms-3"></i>
                                            <label for="Credit">Credit Card</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bank mt-5">
                                <h2>Bank: </h2>
                                <select name="bank_name" class="form-control w-50 mb-5 ms-5 mt-4" required>
                                    <option selected="selected" value="0">Select Bank</option>
                                    <option value="1">ALLAHABAD BANK </option>
                                    <option value="2">ANDHRA BANK</option>
                                    <option value="3">AXIS BANK</option>
                                    <option value="4">BANK OF BARODA</option>
                                    <option value="5">BANK OF INDIA</option>
                                    <option value="6">BANK OF MAHARASHTRA</option>
                                    <option value="7">CANARA BANK</option>
                                    <option value="8">STATE BANK OF INDIA</option>
                                    <option value="9">UCO BANK</option>
                                    <option value="10">UNION BANK OF INDIA</option>
                                    <option value="11">BANK OF INDIA</option>
                                    <option value="12">BANDHAN BANK LIMITED</option>
                                    <option value="13">GRAMIN VIKASH BANK</option>
                                    <option value="14">CORPORATION BANK</option>
                                    <option value="15">INDIAN BANK</option>
                                    <option value="16">INDIAN OVERSEAS BANK</option>
                                    <option value="17">ORIENTAL BANK OF COMMERCE</option>
                                    <option value="18">PUNJAB AND SIND BANK</option>
                                    <option value="19">PUNJAB NATIONAL BANK</option>
                                    <option value="20">RESERVE BANK OF INDIA</option>
                                    <option value="21">SOUTH INDIAN BANK</option>
                                    <option value="22">UNITED BANK OF INDIA</option>
                                    <option value="23">CENTRAL BANK OF INDIA</option>
                                    <option value="24">VIJAYA BANK</option>
                                    <option value="25">DENA BANK</option>
                                    <option value="26">BHARATIYA MAHILA BANK LIMITED</option>
                                    <option value="27">FEDERAL BANK LTD </option>
                                    <option value="28">HDFC BANK LTD</option>
                                    <option value="29">ICICI BANK LTD</option>
                                    <option value="30">IDBI BANK LTD</option>
                                    <option value="31">PAYTM BANK</option>
                                    <option value="32">FINO PAYMENT BANK</option>
                                    <option value="33">INDUSIND BANK LTD</option>
                                    <option value="34">KARNATAKA BANK LTD</option>
                                    <option value="35">KOTAK MAHINDRA BANK</option>
                                    <option value="36">YES BANK LTD</option>
                                    <option value="37">SYNDICATE BANK</option>
                                </select>
                            </div>

                            <?php if (isset($_SESSION['guest_email'])) { ?>
                                <input type="text" hidden name="guest_email" value="<?= $_SESSION['guest_email']; ?>">
                            <?php } ?>

                            <?php if (isset($_SESSION['ticket_for'])) { ?>
                                <input type="text" hidden name="ticket_for" value="<?= $_SESSION['ticket_for']; ?>">
                            <?php } ?>

                            <?php if (isset($_SESSION['ticket_count'])) { ?>
                                <input type="text" hidden name="ticket_count" value="<?= $_SESSION['ticket_count']; ?>">
                            <?php } ?>

                            <div class="buttons text-center mt-5 mb-5">
                                <a class="btn me-1 p-2" href="index.php">Cancel <i class="fa-solid fa-circle-xmark"></i></i></a>
                                <button class="btn p-2">Buy Now <i class="fa-solid fa-credit-card"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Check Out Login -->
    <?php require_once APPROOT . '/src/views/include/footer.php'; ?>
<?php }
?>