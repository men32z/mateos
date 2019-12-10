<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::create([
          'name' => 'Admin',
          'description' => 'Puede accesar a todo',
        ]);

        Role::create([
          'name' => 'Editor',
          'description' => 'Puede accesar a todo, pero no crear usuarios',
        ]);

        User::create([
          'name' => 'Mateos',
          'email' => 'mateos@mateosenlinea.com',
          'password' => bcrypt('testabc'),
          'role_id' => 1
        ]);
    }
}
