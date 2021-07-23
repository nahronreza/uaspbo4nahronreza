<?php

use Illuminate\Database\Seeder;
use App\sysuser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        sysuser::insert ([
        	'uname' => 'agun',
        	'namalengkap' => 'agunamanullah',
        	'email' => 'agunamanullah@gmail.com',
        	'upass' => sha1 ('admin')
        ]);
    }
}
