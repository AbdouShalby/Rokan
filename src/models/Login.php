<?php

namespace Models;

use \Models\Database;

class Login
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

    /**
     * READ
     * @param $email
     * @param $password
     * @return array
     */
	public function login($email, $password): array
	{
		$this->db->query("SELECT * FROM users WHERE User_Email = :email AND User_Password = :pass");
		$this->db->bind(':email', $email);
		$this->db->bind(':pass', $password);

		if ($this->db->rowCount() > 0) {
			$user_name      = $this->db->single()->User_Name;
			$email          = $this->db->single()->User_Email;
            $is_admin       = $this->db->single()->User_Is_Admin;
            return [
                'valid'         =>  '1',
                'user_name'     =>  $user_name,
                'email'         =>  $email,
                'is_admin'      =>  $is_admin,
            ];
		}
		return [
			'valid' => 0
		];

	}
}