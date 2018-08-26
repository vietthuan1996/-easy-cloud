<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Information', 1)->create();
        factory('App\Solution', 5)->create();
        factory('App\Service', 5)->create();
        factory('App\Admin', 1)->create();
        factory('App\RequestAdvisory', 2)->create();
    }
}
