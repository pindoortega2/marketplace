<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BXFx1SHPFKo/gs8tInQBRezzv7TSzbtX7g6VY4gcsBhuIcANOaESm',
                'remember_token' => 'dqeiFfTfpgMHgDO0jjbO9DwrbuR33wYB0pImd4ZX9WATYewJDwN0leyRGbcV',
                'settings' => NULL,
                'created_at' => '2023-08-29 04:46:53',
                'updated_at' => '2023-08-29 04:46:53',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Cliente 1',
                'email' => 'cliente1@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qtNI5Y2C103wcLxLNwP8EOUrLjCrF588PLD9PhOnI3Ow9f7.xQOZG',
                'remember_token' => '2XvsvX5b8xtYV2Rk1vva7VkadnqaKmBORYvqEHpqaHoDi8P2ntW5ck983vdC',
                'settings' => NULL,
                'created_at' => '2023-08-29 04:46:53',
                'updated_at' => '2023-08-29 04:46:53',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'Cliente 2',
                'email' => 'cliente2@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AsMs3fyZUjgk8y3vpoZF2uE9MDcFJd58voc2McHdfYGK9LfcnPyxq',
                'remember_token' => 'LrXpo4CzOaC4CPajXCRjZOuYQtxslPtTpmk3SiO8R2mAn0fDnIVft4cWCVgg',
                'settings' => NULL,
                'created_at' => '2023-08-29 04:46:53',
                'updated_at' => '2023-08-29 04:46:53',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 3,
                'name' => 'Vendedor 1',
                'email' => 'vendedor1@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$L7Zgdx6.E89B398pk7V2G.8e1nTywsLqa5zhK2xg5RxAiEGe9yaqW',
                'remember_token' => 'mpHKdOSuzJ7DOLA4TWiutEwBLOv3mBgMdobEWTqHvxadAwrDUUEyejhjI4Dm',
                'settings' => NULL,
                'created_at' => '2023-08-29 04:46:53',
                'updated_at' => '2023-08-29 04:46:53',
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 2,
                'name' => 'Vendedor 2',
                'email' => 'vendedor2@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TamQaf7dPefMNrGEAvIy7./WDOJ34.ekVbodt60bprHXY1vm/RJu2',
                'remember_token' => 'hq4lz0PYD2hJEi0zp2E2ol4ydIf5xaE0E5jv8UME2sR8TapTH6HKkszv4iOO',
                'settings' => NULL,
                'created_at' => '2023-08-29 04:46:53',
                'updated_at' => '2023-08-29 04:46:53',
            ),
        ));
        
        
    }
}