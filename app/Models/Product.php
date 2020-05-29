<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable = [
        'ten',
        'anh',
        'gia',
        'soluong',
        'category_id',
    ];

    function orderDetails(){
        return $this->hasMany('App\Models\OrderDetail');
    }

    function categories(){
        return $this->belongsTo('App\Models\Category');
    }

}
