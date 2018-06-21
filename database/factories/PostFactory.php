<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
	$title = $faker->sentence( 4 );

	return [
		'user_id' => rand(1, 30),
		'category_id' => rand(1, 20),
		'name' => $title,
		'slug' => str_slug( $title ),
		'excerpt' => $faker->text( 50 ),
		'body' => $faker->text( 50 ),
		'file' => $faker->imageUrl( 1200, 400 ),
		'status' => $faker->randomElement(['DRAFT', 'PUBLISHED'])
	];
});
