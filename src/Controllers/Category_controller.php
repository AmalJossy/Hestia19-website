<?php

namespace App\Controllers;

use Psr\Log\LoggerInterface;
use Illuminate\Database\Query\Builder;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Models\Category;

class Category_controller {
    private $logger;
    protected $table;

    public function __construct(
        LoggerInterface $logger,
        Builder $table
    ) {
        $this->logger = $logger;
        $this->table = $table;
    }
    public function get(Request $request, Response $response, $args)
    {
        // $data = $this->table->get();
        if( isset($args['id']) == TRUE ){
            $data = Category::find($args['id']);
        }
        else{
            $data = Category::all();
        }
        return $response->withJson($data);
    }
    public function post(Request $request, Response $response)
    {
        $data = $request->getParsedBody();
        // if( $_SESSION['role']!= 'super'){
        //     return $response->withStatus(401);
        // }
        Category::create([
            'cat_name' => $data['cat_name'],
            'username' => $data['username'],
            'pswd' => password_hash( $data['password'], PASSWORD_BCRYPT),
        ]);

        return $response->withJson($data);
    }
    public function put(Request $request, Response $response)
    {
        $data = $request->getParsedBody();
        // $data = $args;
        // if( $_SESSION['role']!= 'super' && $_SESSION['role']){
        //     return $response->withStatus(401);
        // }

        $category=Category::where('cat_id',$data['cat_id'])->first();
        foreach($data as $key => $value){
            if( $value != NULL ){ 
                if( $key == 'password' ){
                    $category->pswd=password_hash($value,PASSWORD_BCRYPT);
                }
                else{
                    $category->{$key}= $value;
                }
            }
        }
        $category->save();

        return $response->withJson($data);
    }
}