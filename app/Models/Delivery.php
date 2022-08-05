<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    protected $table = 'deliveries';
    protected $fillable = [
        'customer_id',
        'date',
    ];
    public function customer(){
        return $this->belongsTo('App\Models\Customer','customer_id');
    }
}
