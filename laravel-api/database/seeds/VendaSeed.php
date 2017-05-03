<?php

use Illuminate\Database\Seeder;

class VendaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sell = App\Sell::new([
          'valor' => 2300,
          'seller_id' => 1,
          'date' => '23 de abril de 2017'
        ]);

        $sell->calculateCommision()->save();
    }
}
