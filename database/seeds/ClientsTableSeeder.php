<?php

use Illuminate\Database\Seeder;
use restaurant\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Client::class, 20)->create();
    }
}
