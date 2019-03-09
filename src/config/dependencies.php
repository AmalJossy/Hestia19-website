<?php
// DIC configuration

$container = $app->getContainer();

// twig-view
$container['view'] = function ($container) {
    $templates = __DIR__ . '/../../templates/';
    $cache = FALSE;
    // $cache = __DIR__ . '/../../tmp/views/';

    $view = new Slim\Views\Twig($templates, compact('cache'));

    return $view;
};

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// Service factory for the ORM
$container['db'] = function ($container) {
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['db']);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
};

$container['Page_controller'] = function ($c) {
    $view = $c->get('view');
    $logger = $c->get('logger');
    $table = $c->get('db')->table('users');
    return new \App\Controllers\Page_controller($view, $logger, $table);
};
$container['Event_controller'] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('events');
    return new \App\Controllers\Event_controller($logger, $table);
};
$container['Category_controller'] = function ($c) {
    $logger = $c->get('logger');
    $table = $c->get('db')->table('categories');
    return new \App\Controllers\Category_controller($logger, $table);
};