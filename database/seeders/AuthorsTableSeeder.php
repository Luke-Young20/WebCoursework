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
        $e->post_id = 1;
        $e->save();

        //$authors = Author::factory()->count(10)->create();
    }
}
