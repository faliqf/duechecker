<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 
    ];
    
    protected $primaryKey = 'id';
    protected $table = 'customers';
    public $incrementing = false;
}
