<?php

namespace Controllers;

use Models\Category;

class CategoriesController
{
    public function __construct()
    {
        $this->categoriesModel = new Category;
    }

    public function categories()
    {
        view('dashboard/categories/categories', $this->getCategories());
    }

    public function getCategories()
    {
        return $this->categoriesModel->selectAllcategories();
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $category_id = $_POST['Category_ID'];
            $this->categoriesModel->selectCategoryByID($category_id);
            view('dashboard/categories/category_edit', $this->getCategoryByID());
        } else {
            header('location: ' . URLROOT . 'categories');
        }
    }

    public function getCategoryByID()
    {
        return $this->categoriesModel->selectAllcategories();
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Get Variable From The Form
            $id = $_POST['category_id'];
            $name = $_POST['category_name'];
            $description = $_POST['category_description'];
            $visibilty = $_POST['category_visibilty'];

            $this->categoriesModel->updateCategory($id, $name, $description, $visibilty);
            header('location: ' . URLROOT . 'categories');
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get Variable From The Form
            $id = $_POST['Category_ID'];

            $this->categoriesModel->deleteCategory($id);
            header('location: ' . URLROOT . 'categories');
        }
    }
}