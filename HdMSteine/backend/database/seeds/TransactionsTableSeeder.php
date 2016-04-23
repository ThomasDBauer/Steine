<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Transaction;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('transactions')->delete();
        Transaction::create(['post_id'=>'1', 'partner_id' => '1']);
        Transaction::create(['post_id'=>'2', 'partner_id' => '2']);
        Transaction::create(['post_id'=>'3', 'partner_id' => '2']);
        Transaction::create(['post_id'=>'4', 'partner_id' => '3']);

    }
}
