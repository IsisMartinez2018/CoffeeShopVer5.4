<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $now = Carbon::now()->toDateTimeString();
         Category::insert([
            ['name' => 'Frio', 'slug' => 'Frio', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Caliente', 'slug' => 'Caliente', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Cremoso', 'slug' => 'Cremoso', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Para llevar', 'slug' => 'Para llevar', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dulzor', 'slug' => 'Dulzor', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Con alcohol', 'slug' => 'Con alcohol', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Por sabor', 'slug' => 'Por sabor', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mezclas', 'slug' => 'Mezclas', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Filtros', 'slug' => 'Filtros', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Granos', 'slug' => 'Granos', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bolsitas', 'slug' => 'Bolsitas', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Dulces acompañantes', 'slug' => 'Dulces acompañantes', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Salados acompañantes', 'slug' => 'Salados acompañantes', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Especiales de temporada', 'slug' => 'Especiales de temporada', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Por pais', 'slug' => 'Por pais', 'created_at' => $now, 'updated_at' => $now],
            
        ]);
    }
}
