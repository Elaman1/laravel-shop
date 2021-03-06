<?php

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        // DB::table('currencies')->truncate();
        DB::table('currencies')->insert([
            [
                'code' => 'KZT',
                'symbol' => '₸',
                'is_main' => 1,
                'rate' => 1,
            ],
            [
                'code' => 'RUB',
                'symbol' => '₽',
                'is_main' => 0,
                'rate' => 6.5,
            ],
            [
                'code' => 'USD',
                'symbol' => '$',
                'is_main' => 0,
                'rate' => 430.5,
            ],
        ]);
    }
}
