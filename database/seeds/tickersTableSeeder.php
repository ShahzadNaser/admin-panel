<?php

use Illuminate\Database\Seeder;
use App\Ticker;

class tickersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Ticker::count() == 0) {
            Ticker::create([
                'ticker1'         => 'Ticker1',
                'ticker2'         => 'Ticker2',
                'ticker3'         => 'Ticker3',
                'ticker4'         => 'Ticker4',
                'ticker5'         => 'Ticker5',
                'lang'            => 'en'
            ]);
            Ticker::create([
                'ticker1'         => '1ٹکر',
                'ticker2'         => '2ٹکر',
                'ticker3'         => '3ٹکر',
                'ticker4'         => '4ٹکر',
                'ticker5'         => '5ٹکر',
                'lang'            => 'ur'
            ]);
        }
    }
}
