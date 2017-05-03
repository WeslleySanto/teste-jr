<?php

use Illuminate\Database\Seeder;

class VendedorSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Seller::create([
          'name' => 'Weslley Santo',
          'email' => 'weslley.santo@gmail.com'
        ]);
    }
}
