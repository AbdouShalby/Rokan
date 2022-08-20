<?php
$page = 'Home';
require_once APPROOT . '/src/views/include/header.php';
?>

<!-- Grid row -->
<div class="row">
    <!-- Grid column -->
    <div class="col-md-12 d-flex justify-content-center mb-5">
        <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>
        <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Mountains</button>
        <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Sea</button>
    </div>
    <!-- Grid column -->
</div>
<!-- Grid row -->

<!-- Grid row -->
<div class="gallery" id="gallery">
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" alt="Card image cap">
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.webp" alt="Card image cap">
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.webp" alt="Card image cap">
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).webp" alt="Card image cap">
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).webp" alt="Card image cap">
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.webp" alt="Card image cap">
    </div>
    <!-- Grid column -->

</div>
<!-- Grid row -->

<script>
    $(function() {
        var selectedClass = "";
        $(".filter").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#gallery").fadeTo(100, 0.1);
            $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
            setTimeout(function() {
                $("."+selectedClass).fadeIn().addClass('animation');
                $("#gallery").fadeTo(300, 1);
            }, 300);
        });
    });

    // MDB Lightbox Init
    $(function () {
        $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });
</script>

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>