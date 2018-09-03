<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Factory::create();
      //reset user table
      DB::statement('SET FOREIGN_KEY_CHECKS = 0');
      DB::table('users')->truncate();

      //insert n nuber of users
      DB::table('users')->insert([
        [
          'name' => 'Niran Aina',
          'email' => 'ainaniran@yahoo.com',
          'slug' => 'niran-aina',
          'password' => bcrypt('secret'),
          'bio' => $faker->text(rand(200,256))
        ],
        [
          'name' => 'Femi Aina',
          'email' => 'ainafemi@yahoo.com',
          'slug' => 'femi-aina',
          'password' => bcrypt('secret'),
          'bio' => $faker->text(rand(200,256))
        ],
        [
          'name' => 'Seun Aina',
          'email' => 'ainaseun@yahoo.com',
          'slug' => 'seun-aina',
          'password' => bcrypt('secret'),
          'bio' => $faker->text(rand(200,256))
        ],

      ]);
    }
}
