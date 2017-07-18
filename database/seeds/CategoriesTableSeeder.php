<?php

use Illuminate\Database\Seeder;
use Ideal\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 10)->create();

        DB::table('categories')->insert([
            'name' => str_random(10),
        ]);
    }
}
