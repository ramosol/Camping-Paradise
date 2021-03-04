<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('12345678'),
            'is_admin' => '1',
         ]);

        User::create([
            'name' => 'test',
            'email' => 'test@test.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('12345678'),
            'is_admin' => '0',
        ]);

        Category::create([
            'name' => 'Tente'
        ]);
        Category::create([
            'name' => 'Sac de couchage'
        ]);
        Category::create([
            'name' => 'Sac à dos'
        ]);
        Category::create([
            'name' => 'Chaussures'
        ]);
        Category::create([
            'name' => 'Autres accessoires'
        ]);

//        Product::create([
//            'name' => 'Produit Test',
//            'category_id' => 1,
//            'title' => 'Titre Produit Test',
//            'sub_title' => 'Sous Titre Produit Test',
//            'price' => '5',
//            'description' => 'Description Produit Test',
//            'ref' => 'Reference Produit Test',
//            'available' => 'yes'
//        ]);
    }
}
