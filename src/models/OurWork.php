<?php

namespace Models;

use \Models\Database;

class OurWork
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

    public function selectAllWork()
    {
        $this->db->query("SELECT * FROM works ORDER BY Work_Added_Date DESC");
        return $this->db->resultSet();
    }

    public function selectLatestWork()
    {
        $this->db->query("SELECT * FROM works ORDER BY id DESC LIMIT 2");
        return $this->db->resultSet();
    }

    public function addWork($work_name, $work_image, $work_category, $work_visibility): bool
    {
        $this->db->query("INSERT INTO works (`Work_Name`, `Work_Image`, `Work_Category_ID`, `Work_Visibility`,`Work_Added_Date`) 
                                VALUES (:work_name, :work_image, :work_category, :work_visibility, now())");
        $this->db->bind(':work_name', $work_name);
        $this->db->bind(':work_image', $work_image);
        $this->db->bind(':work_category', $work_category);
        $this->db->bind(':work_visibility', $work_visibility);
        if ($this->db->execute()) {
            return true;
        }
        return false;
    }
}