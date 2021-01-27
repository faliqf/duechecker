<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'payment_date',
        'customer_id' 
    ];

    protected $primaryKey = 'id';
    protected $table = 'payments';
}
