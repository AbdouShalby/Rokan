<?php
$page = 'Dashboard';
$pageTitle = 'Dashboard';
require_once APPROOT . '/src/views/dashboard/inc/header.php';
?>

    <div class="container-fluid dashboard">
        <div class="row mt-5">
            <div class="col-6 mb-5 text-center latest-work">
                <h2><a href="<?= URLROOT ?>ourwork">Latest Work Added <span class="material-symbols-outlined">grade</span></a></h2>
                <div class="card m-auto mt-5" style="width: 23rem;">
                    <img src="<?= D_IMG_PATH ?>logo.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card m-auto mt-3" style="width: 23rem;">
                    <img src="<?= D_IMG_PATH ?>logo.jpg" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-6 mb-5 text-center categories">
                <h2><a href="<?= URLROOT ?>categories">Categories <span class="material-symbols-outlined">category</span></a></h2>
                <table class="table w-75 text-center m-auto mt-5">
                    <thead>
                    <tr class="main-tr">
                        <th scope="col">#</th>
                        <th scope="col">Category</th>
                        <th scope="col">Visible</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jacob</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Jacob</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Jacob</td>
                        <td>@fat</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 mb-5 mt-5 text-center factor-orders">
                <h2><a href="<?= URLROOT ?>factor_orders">Latest Factor Orders <span class="material-symbols-outlined">construction</span></a></h2>
                <table class="table w-75 text-center m-auto mt-5">
                    <thead>
                    <tr class="main-tr">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Service</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 mt-5 mb-5 text-center finishing-packages">
                <h2><a href="<?= URLROOT ?>finishing_packages">Finishing Packages <span class="material-symbols-outlined">paid</span></a></h2>
                <div class="fs-2 mt-5 mb-4">
                    <span class="package-info"><span class="material-symbols-outlined me-2">local_mall</span>$50<span> Package</span></span>
                </div>
                <div class="fs-2 mt-4 mb-4">
                    <span class="package-info"><span class="material-symbols-outlined me-2">local_mall</span>$100<span> Package</span></span>
                </div>
                <div class="fs-2 mt-4 mb-4">
                    <span class="package-info"><span class="material-symbols-outlined me-2">local_mall</span>$150<span> Package</span></span>
                </div>
                <div class="fs-2 mt-4 mb-4">
                    <span class="package-info"><span class="material-symbols-outlined me-2">local_mall</span>$200<span> Package</span></span>
                </div>
            </div>
            <div class="col-6 mt-5 mb-5 text-center finishing-orders">
                <h2><a href="<?= URLROOT ?>finishing_orders">Finishing Orders <span class="material-symbols-outlined">dataset</span></a></h2>
                <table class="table w-75 text-center m-auto mt-5">
                    <thead>
                    <tr class="main-tr">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Package</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 mt-5 mb-5 text-center contact-messages">
                <h2><a href="<?= URLROOT ?>contact_messages">Contact Messages <span class="material-symbols-outlined">chat</span></a></h2>
                <table class="table w-75 text-center m-auto mt-5">
                    <thead>
                    <tr class="main-tr">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Message</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 mt-5 mb-5 text-center social-links">
                <h2><a href="<?= URLROOT ?>social_links">Social Links <span class="material-symbols-outlined">link</span></a></h2>
                <table class="table w-75 text-center m-auto mt-5">
                    <thead>
                    <tr class="main-tr">
                        <th scope="col">#</th>
                        <th scope="col">Social</th>
                        <th scope="col">Link</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6 mt-5 mb-5 text-center stats">
                <h2><a href="<?= URLROOT ?>stats">Stats And Numbers <span class="material-symbols-outlined">pin</span></a></h2>
                <table class="table w-75 text-center m-auto mt-5">
                    <thead>
                    <tr class="main-tr">
                        <th scope="col">#</th>
                        <th scope="col">Statistic</th>
                        <th scope="col">Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 mt-5 mb-5 text-center team-members">
                <h2><a href="<?= URLROOT ?>team_members">Team Members <span class="material-symbols-outlined">groups</span></a></h2>
                <table class="table w-50 text-center m-auto mt-5">
                    <thead>
                    <tr class="main-tr">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php require_once APPROOT . '/src/views/dashboard/inc/footer.php'; ?>