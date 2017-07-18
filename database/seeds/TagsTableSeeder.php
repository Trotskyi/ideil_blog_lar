<?php

use Illuminate\Database\Seeder;
use Ideal\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tag::class, 10)->create();
        DB::table('tags')->insert([
            'name' => str_random(10),
        ]);
    }
}
