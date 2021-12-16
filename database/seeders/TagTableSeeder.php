<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Post;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $tag1 = new Tag;
        $tag1->tag_name = "happy";
        $tag1->save();

        $tag2 = new Tag;
        $tag2->tag_name = "sad";
        $tag2->save();

        $tag3 = new Tag;
        $tag3->tag_name = "angry";
        $tag3->save();

        $tag4 = new Tag;
        $tag4->tag_name = "wholesome";
        $tag4->save();

        $tag5 = new Tag;
        $tag5->tag_name = "annoyed";
        $tag5->save();

        
        $tags = Tag::all();

        Post::all()->each(function ($post) use ($tags) {
            $post->tags()->attach($tags->random(rand(1, 2))->pluck('id')->toArray());
        } );

    }
}
