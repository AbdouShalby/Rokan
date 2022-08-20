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
	 * @return bool
	 */
	public function login($email, $password): array
	{
		$this->db->query("SELECT * FROM users WHERE User_Email = :email AND User_Password = :pass");
		$this->db->bind(':email', $email);
		$this->db->bind(':pass', $password);

		if ($this->db->rowCount() > 0) {
			$first          = $this->db->single()->User_First;
			$last           = $this->db->single()->User_Last;
			$email          = $this->db->single()->User_Email;
			$mobile         = $this->db->single()->User_Mobile;
            $permission     = $this->db->single()->User_Permission;
			$data = [
				'valid'         =>  '1',
				'first'         =>  $first,
				'last'          =>  $last,
                'email'         =>  $email,
				'mobile'        =>  $mobile,
                'permission'    =>  $permission
			];
			return $data;
		}
		return [
			'valid' => 0
		];

	}
}