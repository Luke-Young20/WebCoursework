<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e = new Author;
        $e->name = 'John';
        //e->author_id = 1;
        $e->save();

        $e = new Author;
        $e->name = 'James';
      //  $e->post_id = 2;
        $e->save();

        //$authors = Author::factory()->count(10)->create();
    }
}
