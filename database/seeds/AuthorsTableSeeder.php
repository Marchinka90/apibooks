<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Author::class, 10)->create()->each(function ($author) {
        		$author->books()->save(factory(App\Book::class)->make());
        });
    }
}
