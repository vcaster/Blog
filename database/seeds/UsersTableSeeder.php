<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //reset user table
      DB::statement('SET FOREIGN_KEY_CHECKS = 0');
      DB::table('users')->truncate();

      //insert n nuber of users
      DB::table('users')->insert([
        [
          'name' => 'Niran Aina',
          'email' => 'ainaniran@yahoo.com',
          'password' => bcrypt('secret')
        ],
        [
          'name' => 'Femi Aina',
          'email' => 'ainafemi@yahoo.com',
          'password' => bcrypt('secret')
        ],
        [
          'name' => 'Seun Aina',
          'email' => 'ainaseun@yahoo.com',
          'password' => bcrypt('secret')
        ],

      ]);
    }
}
