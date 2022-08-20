<?php 

// Front Pages Routes
$router->addRoute('', ['controller' => 'IndexController', 'action' => 'index']);
$router->addRoute('factors', ['controller' => 'FactorController', 'action' => 'factors']);
$router->addRoute('finishing', ['controller' => 'FinishController', 'action' => 'finishing']);
$router->addRoute('contact', ['controller' => 'ContactController', 'action' => 'contact']);
$router->addRoute('gallery', ['controller' => 'GalleryController', 'action' => 'gallery']);

// Dashboard Pages Routes
$router->addRoute('admin', ['controller' => 'DashboardController', 'action' => 'dashboard']);
$router->addRoute('ourwork', ['controller' => 'OurworkController', 'action' => 'ourwork']);
$router->addRoute('ourwork_add', ['controller' => 'OurworkController', 'action' => 'add']);
$router->addRoute('ourwork_edit', ['controller' => 'OurworkController', 'action' => 'edit']);
$router->addRoute('ourwork_delete', ['controller' => 'OurworkController', 'action' => 'delete']);
$router->addRoute('login', ['controller' => 'LoginController', 'action' => 'login']);

$router->setParams(getUri());