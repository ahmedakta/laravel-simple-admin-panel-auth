<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $table = 'sellers';
    protected $fillable = [
        'seller_id',
        'product_id',
        'name',
    ];
    public function user(){
        return $this->belongsTo('App\Models\User','seller_id');
    }
    public function product(){
        return $this->belongsTo('App\Models\Product','product_id');
    }
}
