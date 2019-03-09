<?php

use Slim\Http\Request;
use Slim\Http\Response;


$app->get('/api/status', function (Request $request, Response $response, array $args) {
    $data = array('status' => 'Online', 'Version' => 3.1);
    return $response->withJson($data);
});
$app->get('/api/login', function (Request $request, Response $response){
    if( isset($_SESSION['username']) ){
        $data=[
            'role'=> $_SESSION['role'],
            'username'=>$_SESSION['username'],
        ];
        return $response->withJson($data);
    }
    return $response->withStatus(401);
});
$app->post('/api/login', function (Request $request, Response $response) {
    session_unset();
    $postdata = $request->getParsedBody();
    
    switch ($postdata['role']) {
        case 'super':
            $super= require __DIR__.'/config/super.php';
            if( $super['user'] == $postdata['user'] && password_verify($postdata['pass'], $super['pass'])){
                $data=['role'=>'super','username'=>$super['user']];
                $_SESSION['role']='super';
                $_SESSION['username']=$super['user'];
            }
            else{
                $data=['invalid'];
            }
            break;
        case 'category':
            $category=$this->db->table('categories')->where('username',$postdata['user'])->first();
            if( $category != NULL && password_verify($postdata['pass'], $category->pswd) ) {
                $data=$category;
                unset( $data->pswd );
                $_SESSION['role']='category';
                $_SESSION['username']=$category->username;
                $_SESSION['cat_id']=$category->cat_id;
                $_SESSION['cat_name']=$category->cat_name;
            }
            else{
                $data=['invalid'];
            }
            break;
        case 'event':
            $event=$this->db->table('events')->where('username',$postdata['user'])->first();
            if( $event != NULL && password_verify($postdata['pass'], $event->pswd) ) {
                $data=$event;
                unset($data->pswd);
                $_SESSION['role']='event';
                $_SESSION['username']=$category->username;
                $_SESSION['event_id']=$category->event_id;
                $_SESSION['title']=$category->title;
            }
            else{
                $data=['invalid'];
            }
            break;
        
        default:
            $data=['invalid'];
            break;
    }
    return $response->withJson($data);
});
$app->delete('/api/login',function (Request $request, Response $response) {
    session_unset();
    session_destroy();
    return $response->withJson(['logged out']);
});
$app->get('/api/events/[{id}]','Event_controller:get');
$app->post('/api/events/','Event_controller:post')->add( new Api_middleware(['category'=>'owner']) );
$app->put('/api/events/','Event_controller:put')->add( new Api_middleware(['category'=>'owner','event'=>'owner']) );
$app->get('/api/categories/[{id}]','Category_controller:get');
$app->post('/api/categories/','Category_controller:post')->add( new Api_middleware(['category'=>'owner']) );
$app->put('/api/categories/','Category_controller:put')->add( new Api_middleware(['category'=>'owner']) );