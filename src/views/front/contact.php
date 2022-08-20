<?php
$pageTitle = 'Contact';
require_once APPROOT . '/src/views/include/header.php';
?>

    <div class="map">
        <div class="mapouter m-auto">
            <div class="gmap_canvas">
                <iframe width="1263" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=cairo&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
                <a href="https://123movies-to.org"></a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 1263px;
                    }
                </style>
                <a href="https://www.embedgooglemap.net">google maps on my website</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 500px;
                        width: 1263px;
                    }</style>
            </div>
        </div>
    </div>

    <div class=" rounded auto-container mt-6">
        <div class="row px-5">
            <div class="col-sm-6 pad col-lg-5">
                <h2 class="h2Form">Drop us as a line</h2>
                <form class="rounded msg-form">
                    <div class="form-group"><label for="name" class="h6">Your Name</label>
                        <div class="input-group border rounded">
                            <div class="input-group-addon px-2 pt-1">
                                <i class="fas fa-user"></i>
                            </div>
                            <input type="text" class="form-control border-0">
                        </div>
                    </div>
                    <div class="form-group"><label for="name" class="h6">Email</label>
                        <div class="input-group border rounded">
                            <div class="input-group-addon px-2 pt-1"><i class="fa fa-envelope"></i></div>
                            <input type="text" class="form-control border-0">
                        </div>
                    </div>
                    <div class="form-group"><label for="msg" class="h6">Message</label> <textarea name="message"
                                                                                                  id="msgus" cols="10"
                                                                                                  rows="5"
                                                                                                  class="form-control bg-light"
                                                                                                  placeholder="Message"></textarea>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <a href="#" target="_blank" class="btn btn-primary mb-3" style="background-color: #ecc228;
                  border-color: #ecc228;width: 200rem;">send message</a></div>
                </form>
            </div>
            <div class="col-sm-6 col-lg-7">
                <img src="img/contact.jpg">

            </div>

        </div>
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
<?php require_once APPROOT . '/src/views/include/footer.php'; ?>