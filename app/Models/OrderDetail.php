<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable = [
        'dongia',
        'soluong',
        'order_id',
        'product_id',
    ];

    function products(){
        return $this->hasMany('App\Models\Product');
    }

}
