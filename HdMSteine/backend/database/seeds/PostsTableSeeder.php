<?php

use Illuminate\Database\Seeder;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();
        Post::create(['name'=>'Javakurs', 'description'=>'Hallo', 'price'=>'5', 'user_id' => '1', 'status' => 'finished']);
        Post::create(['name'=>'PHP', 'description'=>'Hello', 'price'=>'7', 'user_id' => '1', 'status' => 'on the run']);
        Post::create(['name'=>'CSS', 'description'=>'Hollo', 'price'=>'9', 'user_id' => '2', 'status' => 'finished']);
        Post::create(['name'=>'Blog', 'description'=>'Hullo', 'price'=>'1', 'user_id' => '3', 'status' => 'virgin']);

    }
}
