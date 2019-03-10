<?php

namespace App\Controllers;
use Slim\Views\Twig;
use Psr\Log\LoggerInterface;
use Illuminate\Database\Query\Builder;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class Page_controller {
    private $view;
    private $logger;
    protected $table;

    public function __construct(
        Twig $view,
        LoggerInterface $logger,
        Builder $table
    ) {
        $this->view = $view;
        $this->logger = $logger;
        $this->table = $table;
    }
    public function index(Request $request, Response $response, $args)
    {
        // $users = $this->table->get();
        $users=['Alice','Bob','Carol','Dan','Eve'];
        $this->view->render($response, 'home.twig',['users'=>$users]);

        return $response;
    }
}