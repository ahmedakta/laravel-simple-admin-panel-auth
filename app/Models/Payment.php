<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';
    protected $fillable = [
        'date',
        'category_id',
    ];
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function category(){ //which category
        return $this->belongsTo('App\Models\Category');
    }
}
