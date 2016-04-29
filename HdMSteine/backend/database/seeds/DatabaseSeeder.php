<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ConversationTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(TagUserTableSeeder::class);
        $this->call(TagPostTableSeeder::class);
        $this->call(UserConversationTableSeeder::class);
        //$this->call(CommentTableSeeder::class);

    }
}
