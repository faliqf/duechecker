<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'payment_date',
        'customer_id',
        'item_id', 
        'month_id',
        'amount'
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

    public function month()
    {
        return $this->belongsTo('App\Month');
    }
}
