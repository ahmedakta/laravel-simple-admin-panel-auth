<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingOrder extends Model
{
    use HasFactory;
    protected $table = 'shopping_orders';
    protected $fillable = [
        'customer_id',
        'date',
    ];
    public function customer(){
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
    public function transactionReports(){
        return $this->hasMany('App\Models\TransactionReport');
    }
}
