<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['total_price','id_customer', 'order_code', 'order_date', 'order_end_date', 'order_status'];

    //ORM : OBJEK RELATION MAPPING ATAU MODEL
    //LEFT JOIN, RIGHT JOIN, INNER JOIN, OUTER JOIN
    //ONE TO MANY, MANY TO ONE , MANY TO MANY

    public function customer()
    {
        return $this->belongsTo(Customer::class,'id_customer','id');
    }
}
