<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();
        Tag::create(['value'=>'Java']);
        Tag::create(['value'=>'PHP']);
        Tag::create(['value'=>'Laravel']);
        Tag::create(['value'=>'AngularJS']);
        Tag::create(['value'=>'Javascript']);
        Tag::create(['value'=>'Backend']);
        Tag::create(['value'=>'Frontend']);
    }
}
