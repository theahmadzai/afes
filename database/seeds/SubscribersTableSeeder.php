<?php

use Illuminate\Database\Seeder;
use App\Subscriber;

class SubscribersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Subscriber::class, 10)->create();
    }
}
