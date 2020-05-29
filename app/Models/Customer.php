<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    public $timestamps = false;
    protected $dateFormat = 'U';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';

    protected $fillable = [
        'id',
        'ten',
        'sodienthoai',
        'diachi',
    ];

    function orderDetails(){
        return $this->hasMany('App\Models\OrderDetail');
    }

}
