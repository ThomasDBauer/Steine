<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\TagUser;

class TagUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tag_users')->delete();
        TagUser::create(['tag_id'=>'1', 'user_id' => '1']);
        TagUser::create(['tag_id'=>'2', 'user_id' => '2']);
        TagUser::create(['tag_id'=>'3', 'user_id' => '1']);
        TagUser::create(['tag_id'=>'4', 'user_id' => '2']);
        TagUser::create(['tag_id'=>'5', 'user_id' => '3']);
        TagUser::create(['tag_id'=>'6', 'user_id' => '3']);
    }
}
