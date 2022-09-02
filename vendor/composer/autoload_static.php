<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13a4378e50f68a00bea007f64c218ac8
{
    public static $files = array (
        '7c16fcfdda3e4cc10d51987379ee56ac' => __DIR__ . '/../..' . '/config/constants.php',
        'e16fef1e7699fcf65506ae158fa48f19' => __DIR__ . '/../..' . '/config/credentials.php',
        'ae0873ee00e98f806de4dc7fe24ec1e7' => __DIR__ . '/../..' . '/config/utilities.php',
    );

    public static $classMap = array (
        'App\\Router' => __DIR__ . '/../..' . '/src/app/Router.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Controllers\\CategoriesController' => __DIR__ . '/../..' . '/src/controllers/DashboardControllers/CategoriesController.php',
        'Controllers\\ContactController' => __DIR__ . '/../..' . '/src/controllers/FrontControllers/ContactController.php',
        'Controllers\\ContactMessagesController' => __DIR__ . '/../..' . '/src/controllers/DashboardControllers/ContactMessagesController.php',
        'Controllers\\DashboardController' => __DIR__ . '/../..' . '/src/controllers/DashboardControllers/DashboardController.php',
        'Controllers\\FactorController' => __DIR__ . '/../..' . '/src/controllers/FrontControllers/FactorController.php',
        'Controllers\\FactorOrdersController' => __DIR__ . '/../..' . '/src/controllers/DashboardControllers/FactorOrdersController.php',
        'Controllers\\FinishController' => __DIR__ . '/../..' . '/src/controllers/FrontControllers/FinishController.php',
        'Controllers\\FinishingController' => __DIR__ . '/../..' . '/src/controllers/DashboardControllers/FinishingController.php',
        'Controllers\\GalleryController' => __DIR__ . '/../..' . '/src/controllers/FrontControllers/GalleryController.php',
        'Controllers\\IndexController' => __DIR__ . '/../..' . '/src/controllers/FrontControllers/IndexController.php',
        'Controllers\\LoginController' => __DIR__ . '/../..' . '/src/controllers/DashboardControllers/LoginController.php',
        'Controllers\\OurworkController' => __DIR__ . '/../..' . '/src/controllers/DashboardControllers/OurworkController.php',
        'Controllers\\SocialLinksController' => __DIR__ . '/../..' . '/src/controllers/DashboardControllers/SocialLinksController.php',
        'Controllers\\StatsController' => __DIR__ . '/../..' . '/src/controllers/DashboardControllers/StatsController.php',
        'Controllers\\TeamController' => __DIR__ . '/../..' . '/src/controllers/DashboardControllers/TeamController.php',
        'Models\\Category' => __DIR__ . '/../..' . '/src/models/Category.php',
        'Models\\Database' => __DIR__ . '/../..' . '/src/models/Database.php',
        'Models\\Login' => __DIR__ . '/../..' . '/src/models/Login.php',
        'Models\\OurWork' => __DIR__ . '/../..' . '/src/models/OurWork.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit13a4378e50f68a00bea007f64c218ac8::$classMap;

        }, null, ClassLoader::class);
    }
}
