<?php

    use Ideal\Post;
    use Ideal\Tag;
    use Ideal\Category;
    use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Ideal\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(Ideal\Post::class, function (Faker\Generator $faker) {

    $title = $faker->sentence();
    $slug = Str::slug($title);

    return [
        'title' => $title,
        'body' => $faker->text(140),
        'slug' => $slug,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'category_id' => Category::all()->random()->id,
        'updated_at' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),

    ];
});


$factory->define(Ideal\Category::class, function (Faker\Generator $faker) {

    return [
       'name' => $faker->sentence(1),
    ];
});

$factory->define(Ideal\Tag::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->sentence(1),
    ];
});


$factory->define(Ideal\PostTag::class, function (Faker\Generator $faker) {

    return [
        'post_id' => Category::all()->random()->id,
    ];
});


