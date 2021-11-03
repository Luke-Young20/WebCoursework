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
       // $a = new Author;
       // $a->name = "Jimmy";
       // $a->save();

        $authors = Author::factory()->count(10)->create();
    }
}
