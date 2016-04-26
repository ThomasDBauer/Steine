<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\UserConversation;

class UserConversationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag_users')->delete();
        UserConversation::create(['conversation_id'=>'1', 'user_id' => '1']);
        UserConversation::create(['conversation_id'=>'1', 'user_id' => '2']);
        UserConversation::create(['conversation_id'=>'2', 'user_id' => '1']);
        UserConversation::create(['conversation_id'=>'2', 'user_id' => '3']);
    }
}
