<?php

namespace Models;

use \Models\Database;

class Guest
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    /**
     * CREATE
     * @param $firstName
     * @param $lastName
     * @param $email
     * @return bool
     */
    public function guest_store($firstName, $lastName, $email): bool
    {
        $this->db->query("INSERT INTO guests (`Guest_First`, `Guest_Last`, `Guest_Email`) VALUES (:first, :last, :email)");
        $this->db->bind(':first', $firstName);
        $this->db->bind(':last', $lastName);
        $this->db->bind(':email', $email);
        if ($this->db->execute())
            return true;
        return false;
    }

}