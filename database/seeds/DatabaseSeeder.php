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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'zuhaily',
            'email' => '2019705303@isiswa.uitm.edu.my',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'muhammad',
            'email' => '2016801896@isiswa.uitm.edu.my',
            'password' => bcrypt('password'),
        ]);
    }
}
