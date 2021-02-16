<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'payment_date',
        'customer_id',
        'item_id' 
    ];

    protected $primaryKey = 'id';
    protected $table = 'payments';

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function item()
    {
        return $this->belongsTo('App\Item');
    }
}
