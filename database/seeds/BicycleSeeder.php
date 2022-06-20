<?php

use App\Bicycle;
use Illuminate\Database\Seeder;

class BicycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Bicycle::class,200)->create();
    }
}
