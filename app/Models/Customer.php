<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = [
        'name',
        'contact_add',
        'adress',
    ];
    public function deliveries(){
        return $this->belongsToMany('App\Models\Delivery');
    }
    public function shoppingOrders(){
        return $this->hasMany('App\Models\ShoppingOrder');
    }
    public function categories(){
        return $this->hasMany('App\Models\Category');
    }
    public function products(){
        return $this->hasMany('App\Models\Product');
    }
    public function payments(){
        return $this->hasMany('App\Models\Payment');
    }

}
