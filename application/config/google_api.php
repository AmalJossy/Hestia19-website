<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
// $config['google']['client_id']        = '75317617188-laanc98h20i5fuune0bf4hh7gpn926in.apps.googleusercontent.com';
$config['google']['client_id']        = '880454166417-rbma92ale4sj7lt94nhepdsgumllps94.apps.googleusercontent.com';
// $config['google']['client_secret']    = 'VVWj_15tvjQzNNpFASUNcgwm';
$config['google']['client_secret']    = '_vM7iDvL7d8pz8A6pN9TBhZg';
// $config['google']['redirect_uri']     = 'http://hestialocal.live/Auth/oauth2callback';
$config['google']['redirect_uri']     = 'https://www.hestia.live/Auth/oauth2callback';
$config['google']['application_name'] = 'Hestia';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array();

?>