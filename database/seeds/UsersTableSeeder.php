<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name'=>'Kleber',
          'email'=> 'kleber.briones80@gmail.com',
          'password'=> bcrypt('melissa1208')
        ]);
    }
}
