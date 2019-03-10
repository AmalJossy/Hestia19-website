<?php

namespace App\Controllers;
use Psr\Log\LoggerInterface;
use Illuminate\Database\Query\Builder;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

use App\Models\Event;

class Event_controller {
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
            $data = Event::find($args['id']);
        }
        else{
            $data = Event::all();
        }
        return $response->withJson($data);
    }
    public function post(Request $request, Response $response, $args)
    {
        $data = $request->getParsedBody();
        Event::create([
            'cat_id' => $data['cat_id'],
            'title' => $data['title'],
            'short_desc' => $data['short_desc'],
            'details' => $data['details'],
            'venue' => $data['venue'],
            'reg_fee' => $data['reg_fee'],
            'prize' => $data['prize'],
            'co1_name' => $data['co1_name'],
            'co1_no' => $data['co1_no'],
            'co2_name' => $data['co2_name'],
            'co2_no' => $data['co2_no'],
            'seats' => $data['seats'],
            'reg_start' => $data['reg_start'],
            'reg_end' => $data['reg_end'],
            'username' => $data['username'],
            'pswd' => password_hash( $data['password'], PASSWORD_BCRYPT),
        ]);
        
        return $response->withJson($data);
    }
    public function put(Request $request, Response $response)
    {
        $data = $request->getParsedBody();

        $event=Event::where('event_id',$data['event_id'])->first();
        foreach($data as $key => $value){
            if( $value != NULL ){ 
                if( $key == 'password' ){
                    $event->pswd=password_hash($value,PASSWORD_BCRYPT);
                }
                else{
                    $event->{$key}= $value;
                }
            }
        }
        $event->save();

        return $response->withJson($data);
    }
}