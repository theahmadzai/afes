<?php

use Illuminate\Database\Seeder;
use App\File;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(File::class, 10)->create();
    }
}
