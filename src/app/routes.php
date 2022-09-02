<?php 

// Front Pages Routes
$router->addRoute('', ['controller' => 'IndexController', 'action' => 'index']);
$router->addRoute('factors', ['controller' => 'FactorController', 'action' => 'factors']);
$router->addRoute('finishing', ['controller' => 'FinishController', 'action' => 'finishing']);
$router->addRoute('contact', ['controller' => 'ContactController', 'action' => 'contact']);
$router->addRoute('gallery', ['controller' => 'GalleryController', 'action' => 'gallery']);

// Dashboard Pages Routes
$router->addRoute('login', ['controller' => 'LoginController', 'action' => 'login']);
$router->addRoute('user_login', ['controller' => 'LoginController', 'action' => 'userLogin']);
$router->addRoute('logout', ['controller' => 'LoginController', 'action' => 'logout']);

$router->addRoute('admin', ['controller' => 'DashboardController', 'action' => 'dashbaord']);

$router->addRoute('ourwork', ['controller' => 'OurworkController', 'action' => 'ourwork']);
$router->addRoute('ourwork_add', ['controller' => 'OurworkController', 'action' => 'add']);
$router->addRoute('ourwork_edit', ['controller' => 'OurworkController', 'action' => 'edit']);
$router->addRoute('ourwork_delete', ['controller' => 'OurworkController', 'action' => 'delete']);

$router->addRoute('categories', ['controller' => 'CategoriesController', 'action' => 'categories']);
$router->addRoute('category_edit', ['controller' => 'CategoriesController', 'action' => 'edit']);
$router->addRoute('category_update', ['controller' => 'CategoriesController', 'action' => 'update']);
$router->addRoute('category_delete', ['controller' => 'CategoriesController', 'action' => 'delete']);

$router->addRoute('factor_orders', ['controller' => 'FactorOrdersController', 'action' => 'factor_orders']);

$router->addRoute('finishing_packages', ['controller' => 'FinishingController', 'action' => 'packages']);
$router->addRoute('finishing_edit', ['controller' => 'FinishingController', 'action' => 'package_edit']);
$router->addRoute('finishing_delete', ['controller' => 'FinishingController', 'action' => 'package_delete']);
$router->addRoute('finishing_orders', ['controller' => 'FinishingController', 'action' => 'orders']);

$router->addRoute('contact_messages', ['controller' => 'ContactMessagesController', 'action' => 'contact']);

$router->addRoute('social_links', ['controller' => 'SocialLinksController', 'action' => 'social']);
$router->addRoute('social_edit', ['controller' => 'SocialLinksController', 'action' => 'edit']);

$router->addRoute('stats', ['controller' => 'StatsController', 'action' => 'stats']);
$router->addRoute('stats_edit', ['controller' => 'StatsController', 'action' => 'edit']);

$router->addRoute('team_members', ['controller' => 'TeamController', 'action' => 'team']);
$router->addRoute('member_edit', ['controller' => 'TeamController', 'action' => 'edit']);

$router->setParams(getUri());