<?php

use Illuminate\Database\Seeder;
use App\Application;
use App\File;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Application::class, 5)->create()->each(function ($application) {
            $application->file()->save(factory(File::class)->make());
        });
    }
}
