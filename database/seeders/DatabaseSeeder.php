<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //seeding order
            $this->call(UserTableSeeder::class);        
            $this->call(AuthorTableSeeder::class);               
            $this->call(PostTableSeeder::class);
            $this->call(CommentTableSeeder::class);
            $this->call(TagTableSeeder::class);
            
   }
}
