<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
       'name'=>str::random(10),
       'email'=>str::random(10).'@yahoo.com',
       'address'=>str::random(10)
            
        ]);
    }
}
