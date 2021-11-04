<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    /*    $d = new Comment;
        $d->commentText = "my first comment";
        $d->author_id = 1;
        $d->post_id = 1;
        $d->save();
        */

        $comments = Comment::factory()->count(30)->create();

    }
}
