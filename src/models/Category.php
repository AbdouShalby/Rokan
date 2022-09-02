<?php

namespace Models;

use \Models\Database;

class Category
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

    public function selectAllCategories()
    {
        $this->db->query("SELECT * FROM categories ORDER BY Category_ID");
        return $this->db->resultSet();
    }

    public function selectLatestCategories()
    {
        $this->db->query("SELECT * FROM categories ORDER BY id DESC LIMIT 2");
        return $this->db->resultSet();
    }

    public function selectCategoryByID($id)
    {
        $this->db->query("SELECT * FROM categories WHERE Category_ID = :category_id");
        $this->db->bind(':category_id', $id);
        return $this->db->single();
    }

    public function updateCategory($category_id, $category_name, $category_discription, $category_visibility): bool
    {
        $this->db->query("UPDATE categories SET `Category_Name` = :category_name, `Category_Description` = :category_description, `Category_Visibility` = :category_visibility WHERE `Category_ID` = :category_id");
        $this->db->bind(':category_id', $category_id);
        $this->db->bind(':category_name', $category_name);
        $this->db->bind(':category_description', $category_discription);
        $this->db->bind(':category_visibility', $category_visibility);
        if ($this->db->execute()) {
            return true;
        }
        return false;
    }

    public function deleteCategory($category_id): bool
    {
        $this->db->query("DELETE FROM categories WHERE `Category_ID` = :category_id");
        $this->db->bind(':category_id', $category_id);
        if ($this->db->execute()) {
            return true;
        }
        return false;
    }
}