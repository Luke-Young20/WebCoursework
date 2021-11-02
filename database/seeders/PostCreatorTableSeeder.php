<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostCreator;

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
        $e->post_id = 1; 
        $e->save();

        $postcreators = PostCreator::factory()->count(10)->create();
    }
}
