<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();
        Comment::create(['author_id' => '1', 'post_id' => '1', 'comment' => 'blub']);
        Comment::create(['author_id' => '2', 'post_id' => '1', 'comment' => 'bfdsf']);
        Comment::create(['author_id' => '3', 'post_id' => '2', 'comment' => 'beeeeeeee']);
        Comment::create(['author_id' => '1', 'post_id' => '3', 'comment' => 'Aaaaaaa']);
        Comment::create(['author_id' => '2', 'post_id' => '3', 'comment' => 'qqqqqqqqqq']);
    }
}
