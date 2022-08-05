<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionReport extends Model
{
    use HasFactory;
    protected $table = 'transaction_reports';
    protected $fillable = [
        'customer_id',
        'order_id',
        'product_id',
        'payment_id',
    ];
    public function customer(){
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
    public function product(){
        return $this->belongsTo('App\Models\Product','product_id');
    }
    public function shoppingOrder(){
        return $this->belongsTo('App\Models\ShoppingOrder','order_id');
    }

}
