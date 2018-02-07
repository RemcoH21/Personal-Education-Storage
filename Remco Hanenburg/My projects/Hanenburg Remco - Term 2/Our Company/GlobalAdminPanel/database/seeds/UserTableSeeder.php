<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Wesley Verbrugge',
          'email' => 'test@test.nl',
          'password' => bcrypt('test'),
      ]);
    }
}
