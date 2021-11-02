<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Post;
        $a->title = "First Post";
        $a->content = "my first post";
       // $a->date_of_posting = timestamps;
        $a->save();

        $animals = Post::factory()->count(10)->create();
    }
}
