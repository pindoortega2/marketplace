<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    //protected $fillable = ['fullname', 'address', 'city', 'state', 'zipcode', 'phone'];
    use HasFactory;

    public function items() {

        return $this->belongsToMany(Product::class, 'order_items', 'order_id', 'product_id')->withPivot('price', 'quantity');        

    }

    public function user() {

        return $this->belongsTo(User::class);
        
    }

}
