<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model{
    protected $table = 'events';
    public $timestamps = false;
    protected $primaryKey = 'event_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cat_id' ,
        'title' ,
        'short_desc' ,
        'details' ,
        'venue' ,
        'prize' ,
        'co1_name' ,
        'co1_no' ,
        'co2_name' ,
        'co2_no' ,
        'seats' ,
        'reg_start' ,
        'reg_end' ,
        'username' ,
        'pswd' ,
    ];
    
}