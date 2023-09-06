<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model {

    use HasFactory;
    use Sluggable;

    protected $fillable = ['nombre','slug', 'descripcion', 'precio', 'cover_img', 'shop_id', 'category_id'];

    public function shop(){
        return $this->belongsTo(Shop::class, 'user_id');
    }

    //Trae los datos del producto a partir del slug https://laravel.com/docs/8.x/routing#main-content
    public function getRouteKeyName() {
        return 'slug';
    }

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'nombre'
            ]
        ];
    }


}
