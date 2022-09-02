<?php

namespace Controllers;

use \Models\OurWork;

class OurworkController
{
    public function __construct()
    {
        $this->ourWorkModel = new OurWork;
    }

    public function getOurWork()
    {
        return $this->ourWorkModel->selectAllWork();
    }

    public function ourWork()
    {
        view('dashboard/ourwork/ourwork', $this->getOurWork());
    }

    public function add()
    {
        view('dashboard/ourwork/ourwork_add');
    }

    public function storeWork()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {

            // Upload Variables
            $workIMGName = $_FILES['image']['name'];
            $workIMGSize = $_FILES['image']['size'];
            $workIMGTmp  = $_FILES['image']['tmp_name'];
            $eventIMGType = $_FILES['image']['type'];

            // List For Allowed File Types To Upload
            $eventIMGAllowedExtensions = array("jpeg", "jpg", "png");

            // Get Image Extension
            $explode = explode('.', $workIMGName);
            $eventIMGExtension = strtolower(end($explode));

            $work_name          = $_POST['work_name'];
            $work_category      = $_POST['work_category'];
            $work_visibility    = $_POST['work_visibility'];

            // Validate The Form
            if (empty($work_name)) {
                $_SESSION['work_name_empty'] = 'Name Is Required';
            }
            if ($work_category == 0) {
                $_SESSION['work_category_empty'] = 'Category Is Required';
            }
            if ($work_visibility == 0) {
                $_SESSION['work_visibilty_empty'] = 'Visibilty Is Required';
            }
            if (!empty($workIMGName) && !in_array($eventIMGExtension, $eventIMGAllowedExtensions)) {
                $_SESSION['work_image_extention'] = 'Extension Not Supported';
            }
            if (empty($workIMGName)) {
                $_SESSION['work_image_empty'] = 'Image Is Required';
            }
            if ($workIMGSize > 4194304) {
                $_SESSION['work_image_size'] = "Image Can't Be More Than 4MB";
            }

            if ($_SESSION != $_SESSION['work_name_empty'] || $_SESSION['work_category_empty'] || $_SESSION['work_visibilty_empty'] || $_SESSION['work_image_extention'] || $_SESSION['work_image_empty'] || $_SESSION['work_image_size']) {
                $workImage = rand(0, 100000000) . '_' . $workIMGName;
                move_uploaded_file($workIMGTmp, UPLOAD_PATH . '/' . $workImage);
                $this->ourWorkModel->addWork($work_name, $workImage, $work_category, $work_visibility);
                $_SESSION['event_created'] = EVENT_CRATED;
            }
        }
        header('location: ' . URLROOT . 'ourwrok');
    }

    public function edit()
    {
        view('dashboard/ourwork/ourwork_edit');
    }

    public function delete()
    {
        view('dashboard/ourwork/ourwork_delete');
    }
}