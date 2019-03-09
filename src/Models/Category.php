<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model{
    protected $table = 'Categories';
    public $timestamps = false;
    protected $primaryKey = 'cat_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cat_name',
        'username' ,
        'pswd'
    ];
    
}