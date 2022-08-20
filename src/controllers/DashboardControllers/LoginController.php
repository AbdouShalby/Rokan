<?php

namespace Controllers;

use \Models\Login;

class LoginController
{
	public function __construct()
	{
		$this->loginModel = new Login;
	}

	// Render View
	public function login()
	{
		view('front/login');
	}

	// Login Logic
	public function userLogin() {
		session_start();
		if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
			$hashedPass = sha1($_POST['password']);
			$response = $this->loginModel->login($_POST['email'], $hashedPass);
            if($response['valid'] == 1){
                $_SESSION['user']               = $_POST['email'];
                $_SESSION['User_First']         = $response['first'];
                $_SESSION['User_Last']          = $response['last'];
                $_SESSION['User_Mobile']        = $response['mobile'];
                $_SESSION['User_Permission']    = $response['permission'];
                header('location: ' . URLROOT); // Redirect To Dashboard Page
			} else {
                if (empty($_POST['email'])) {
                    $_SESSION['empty_email'] = EMPTY_EMAIL;
                }
                if (empty($_POST['password'])) {
                    $_SESSION['empty_pass'] = EMPTY_PASSWORD;
                }
                $_SESSION['wrong_data'] = WRONG_DATA;
                header('location: ' . URLROOT . '/login'); // Redirect To Dashboard Page
			}
		} else {
			header('location: ' . URLROOT . '/login');
		}
	}

    // Login Logic
    public function checkout_user_login() {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
            $hashedPass = sha1($_POST['password']);
            $response = $this->loginModel->login($_POST['email'], $hashedPass);
            if($response['valid'] == 1){
                $_SESSION['user']               = $_POST['email'];
                $_SESSION['User_First']         = $response['first'];
                $_SESSION['User_Last']          = $response['last'];
                $_SESSION['User_Mobile']        = $response['mobile'];
                $_SESSION['User_Permission']    = $response['permission'];
                $_SESSION['ticket_for'] = $_POST['ticket_for'];
                $_SESSION['ticket_count'] = $_POST['ticket_count'];
                header('location: ' . URLROOT . '/checkout_billing'); // Redirect To Dashboard Page
            } else {
                if (empty($_POST['email'])) {
                    $_SESSION['empty_email'] = EMPTY_EMAIL;
                }
                if (empty($_POST['password'])) {
                    $_SESSION['empty_pass'] = EMPTY_PASSWORD;
                }
                $_SESSION['wrong_data'] = WRONG_DATA;
                header('location: ' . URLROOT . '/checkout_login'); // Redirect To Dashboard Page
            }
        } else {
            header('location: ' . URLROOT . '/checkout_login');
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header('location: ' . URLROOT . '/login');
        exit();
    }
}