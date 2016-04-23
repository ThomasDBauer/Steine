<?php

use Illuminate\Database\Seeder;
use App\Message;
use Illuminate\Support\Facades\DB;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();
        Message::create(['message'=>'Hey Timbo! Wie gehts?', 'sender_id'=>'1', 'receiver_id'=>'2']);
        Message::create(['message'=>'Man, geht gut!', 'sender_id'=>'2', 'receiver_id'=>'1']);
        Message::create(['message'=>'Ich würd das gerne kaufen!', 'sender_id'=>'3', 'receiver_id'=>'1']);
    }
}
