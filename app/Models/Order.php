<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable = [
        'ngaylaphoadon',
        'diachigiaohang',
        'tien',
        'ghichu',
        'customer_id',
    ];

    function orderDetails(){
        return $this->hasMany('App\Models\OrderDetail');
    }
    function customers(){
        return $this->belongsTo('App\Models\Customer');
    }

}