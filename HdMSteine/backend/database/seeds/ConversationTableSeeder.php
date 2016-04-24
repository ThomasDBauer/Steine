<?php

use Illuminate\Database\Seeder;
use App\Conversation;
use Illuminate\Support\Facades\DB;

class ConversationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conversations')->delete();
        Conversation::create();
        Conversation::create();
    }
}
