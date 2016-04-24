<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\TagPost;

class TagPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag_posts')->delete();
        TagPost::create(['tag_id'=>'1', 'post_id' => '1']);
        TagPost::create(['tag_id'=>'2', 'post_id' => '1']);
        TagPost::create(['tag_id'=>'3', 'post_id' => '2']);
        TagPost::create(['tag_id'=>'4', 'post_id' => '2']);
        TagPost::create(['tag_id'=>'5', 'post_id' => '3']);
        TagPost::create(['tag_id'=>'6', 'post_id' => '4']);
        TagPost::create(['tag_id'=>'7', 'post_id' => '4']);
    }
}
