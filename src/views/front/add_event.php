<?php
date_default_timezone_set('Africa/Cairo');
$date = date('Y-m-d', time());
$time = date('h:i', time());
$pageTitle = "Add Event";
require_once APPROOT . '/src/views/include/header.php';
if (isset($_SESSION['user']) && $_SESSION['User_Permission'] == 1) {
?>
    <div class="add_event pt-5 pb-5 text-center text-md-start m-auto">
        <div class="container">
            <form class="row align-items-center text-center p-4 w-100" action="<?= URLROOT; ?>/store_event" method="POST" enctype="multipart/form-data">
                <div class="col-12 mb-4">
                    <h2>Add New Event</h2>
                    <?php
                    if (isset($_SESSION['event_created'])) {
                        echo "<div class='p-2 mt-2 alert alert-success w-50 m-auto'>". $_SESSION['event_created'] ."</div>";
                        unset($_SESSION['event_created']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <label>
                        <input class="p-2" type="text" placeholder="Event Artist" required="required" name="artist">
                    </label>
                    <?php
                    if (isset($_SESSION['event_artist_err'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-50 m-auto'>". $_SESSION['event_artist_err'] ."</div>";
                        unset($_SESSION['event_artist_err']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <label>
                        <input class="p-2" type="text" placeholder="Event Venue" required="required" name="venue">
                    </label>
                    <?php
                    if (isset($_SESSION['event_venue_err'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-50 m-auto'>". $_SESSION['event_venue_err'] ."</div>";
                        unset($_SESSION['event_venue_err']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <label>
                        <input class="p-2" type="text" placeholder="Event Location" required="required" name="location">
                    </label>
                    <?php
                    if (isset($_SESSION['event_location_err'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-50 m-auto'>". $_SESSION['event_location_err'] ."</div>";
                        unset($_SESSION['event_location_err']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <label>
                        <input class="p-2" type="text" placeholder="Event Session" required="required" name="session">
                    </label>
                    <?php
                    if (isset($_SESSION['event_session_err'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-50 m-auto'>". $_SESSION['event_session_err'] ."</div>";
                        unset($_SESSION['event_session_err']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <label>
                        <input class="p-2" type="number" min="1" placeholder="Event Duration" required="required" name="duration">
                    </label>
                    <?php
                    if (isset($_SESSION['event_duration_err'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-50 m-auto'>". $_SESSION['event_duration_err'] ."</div>";
                        unset($_SESSION['event_duration_err']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <label>
                        <input class="p-2" type="number" min="1" placeholder="Event Price" required="required" name="price">
                    </label>
                    <?php
                    if (isset($_SESSION['event_price_err'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-50 m-auto'>". $_SESSION['event_price_err'] ."</div>";
                        unset($_SESSION['event_price_err']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <label>
                        <input class="p-2" type="number" min="1" placeholder="Event Stock" required="required" name="stock">
                    </label>
                    <?php
                    if (isset($_SESSION['event_stock_err'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-50 m-auto'>". $_SESSION['event_stock_err'] ."</div>";
                        unset($_SESSION['event_stock_err']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <input class="p-2 text-start text-black-50" type="file" id="img" required="required" name="image"/>
                    <?php
                    if (isset($_SESSION['event_image_extension_err'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['event_image_extension_err'] ."</div>";
                        unset($_SESSION['event_image_extension_err']);
                    } elseif (isset($_SESSION['event_image_err'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['event_image_err'] ."</div>";
                        unset($_SESSION['event_image_err']);
                    } elseif (isset($_SESSION['event_image_size_err'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-25 m-auto'>". $_SESSION['event_image_size_err'] ."</div>";
                        unset($_SESSION['event_image_size_err']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <label> Event Date
                        <input class="p-2" type="date" min="<?= $date; ?>" value="<?= $date; ?>" name="date">
                    </label>
                    <?php
                    if (isset($_SESSION['event_date_err'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-50 m-auto'>". $_SESSION['event_date_err'] ."</div>";
                        unset($_SESSION['event_date_err']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <label> Event Start At
                        <input class="p-2" type="time" min="<?= $time; ?>" value="<?= $time; ?>" name="start">
                    </label>
                    <?php
                    if (isset($_SESSION['event_start_err'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-50 m-auto'>". $_SESSION['event_start_err'] ."</div>";
                        unset($_SESSION['event_start_err']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-4">
                    <label> Event End At
                        <input class="p-2" type="time" value="<?= $time; ?>" name="end">
                    </label>
                    <?php
                    if (isset($_SESSION['event_end_err'])) {
                        echo "<div class='p-2 mt-2 alert alert-danger w-50 m-auto'>". $_SESSION['event_end_err'] ."</div>";
                        unset($_SESSION['event_end_err']);
                    }
                    ?>
                </div>
                <div class="col-12 mb-2">
                    <button class="btn rounded-pill ps-5 pe-5" type="submit">Add <i class="fa-solid fa-plus"></i></button>
                </div>
            </form>
        </div>
    </div>
<?php require_once APPROOT . '/src/views/include/footer.php';
} else {
    header('location: ' . URLROOT);
}?>