<?php
// Application middleware

class Api_middleware
{
    private $rules;

    public function __construct($rules){
        $this->rules=$rules;
    }
    public function session($key){
        return isset($_SESSION[$key]) ? $_SESSION[$key] : NULL ;
    }
    public function __invoke($request, $response, $next)
    {
        if( $this->session('role') == 'super' ){
            $response = $next($request, $response);
            return $response;
        }
        if( isset($this->rules['category']) && $this->rules['category'] == 'owner' ){
            $data=$request->getParsedBody();
            if( isset($data['cat_id']) && $data['cat_id'] == $this->session('cat_id')){
                $response = $next($request, $response);
                return $response;
            }
        }
        if( isset($this->rules['events']) && $this->rules['events'] == 'owner' ){
            $data=$request->getParsedBody();
            if( isset($data['event_id']) && $data['event_id'] == $this->session('event_id')){
                $response = $next($request, $response);
                return $response;
            }
        }
        return $response->withStatus(401);
        // return $response->withJSON($this->rules);

        
    }
}