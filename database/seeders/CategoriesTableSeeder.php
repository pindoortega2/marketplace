<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Category 1',
                'slug' => 'category-1',
                'created_at' => '2023-08-29 04:46:52',
                'updated_at' => '2023-08-29 04:46:52',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Category 2',
                'slug' => 'category-2',
                'created_at' => '2023-08-29 04:46:52',
                'updated_at' => '2023-08-29 04:46:52',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Categoria 3',
                'slug' => 'categoria-3',
                'created_at' => '2023-09-02 21:31:18',
                'updated_at' => '2023-09-02 21:31:18',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 1,
                'order' => 1,
                'name' => 'Categoria 4',
                'slug' => 'categoria-4',
                'created_at' => '2023-09-02 22:01:29',
                'updated_at' => '2023-09-02 22:01:29',
            ),
        ));
        
        
    }
}