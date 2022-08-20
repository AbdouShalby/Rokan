<?php
$pageTitle = 'Factors';
require_once APPROOT . '/src/views/include/header.php';
?>

    <section class="orderFactor text-center text-white ">
        <div class="background-overlay"></div
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <h1 class="text-white online">order factor online</h1>
                    <h2 class="text-white onlineHeading">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry.
                        Lorem Ipsum has been...</h2>
                </div>
                <div class="col-lg-2"></div>

            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="contain">
                    <div class="text-center mb-5">
                        <h4 class="ordFactor">Order Factor From Here</h4>
                    </div>
                    <form class="form">
                        <div class="form-group required">
                            <label for="exampleInputName" class="control-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter your name">
                        </div>
                        <div class="form-group required">
                            <label for="exampleInputEmail1" class="control-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   placeholder="Enter your mail" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group required">
                            <label for="exampleInputMobile" class="control-label">Mobile Number</label>
                            <input type="tel" class="form-control" id="exampleInputMobile"
                                   placeholder="Enter your mobile">
                        </div>
                        <div class="form-group required">
                            <label for="exampleInputOrigin" class="control-label">Origin</label>
                            <input type="text" class="form-control" id="exampleInputOrigin"
                                   placeholder="Enter your origin">
                        </div>
                        <div class="form-group required">
                            <label for="exampleFormControlSelect1" class="control-label">Choose Service</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Choose Service</option>
                                <option>Dehan</option>
                                <option>Jobson Board</option>
                                <option>Sebaka</option>
                                <option>Electricity</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Describtion</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                                      placeholder="Put description here..."></textarea>
                        </div>
                        <div class="orderButtonContainer text-center">
                            <button type="submit" class="btn btn-primary submitFactor">Order Factor</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>