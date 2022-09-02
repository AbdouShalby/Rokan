<?php

namespace Controllers;

use Models\Login;

class LoginController
{
    public function __construct()
    {
        $this->loginModel = new Login;
    }

    // Render View

    public function userLogin()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $filtredPass = (filter_var($_POST['password'], FILTER_SANITIZE_STRING));
                $hashedPass = sha1($filtredPass);
                $response = $this->loginModel->login($_POST['email'], $hashedPass);
                if ($response['valid'] == 1) {
                    $_SESSION['User_Email'] = $_POST['email'];
                    $_SESSION['User_Name'] = $response['user_name'];
                    $_SESSION['User_Is_Admin'] = $response['is_admin'];
                    $_SESSION['start'] = time(); // Taking now logged in time.
                    // Ending a session in 30 minutes from the starting time.
                    $_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
                    header('location: ' . URLROOT . 'admin'); // Redirect To Dashboard Page
                } else {
                    if (empty($_POST['email'])) {
                        $_SESSION['empty_email'] = "E-Mail Can't Be Empty.\n";
                    }
                    if (empty($_POST['password'])) {
                        $_SESSION['empty_pass'] = "Password Can't Be Empty.\n";
                    }
                    $_SESSION['wrong_data'] = "The email or password you entered is not associated with an account.\n";
                    header('location: ' . URLROOT . 'login'); // Redirect To Login Page
                }
            } else {
                header('location: ' . URLROOT . 'login');
                $_SESSION['invalid_email'] = "This is an INVALID email address.\n";
            }
        } else {
            header('location: ' . URLROOT . 'login');
        }
    }

    // Login Logic

    public function login()
    {
        view('dashboard/login');
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('location: ' . URLROOT . 'login');
        exit();
    }
}