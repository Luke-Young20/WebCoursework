<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostCreatorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e = new PostCreator;
        $e->name = 'Max';
        $e->posts_id = 1;
        $e->save();
    }
}
