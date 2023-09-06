<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        Product::factory()->count(30)->create([
            'shop_id' => 1,            
        ]);
        
        Product::factory()->count(20)->create([
            'shop_id' => 2,            
        ]);

    }
}
