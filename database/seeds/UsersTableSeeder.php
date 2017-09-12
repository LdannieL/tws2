<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'name'           => 'Danijela Lapcevic',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => str_random(60),
                'role_id'        => $role->id,
            ]);

            $role2 = Role::where('name', 'user')->firstOrFail();

            User::create([
                'name'           => 'Michael Crisp',
                'email'          => 'test1@example.com',
                'avatar'         => 'users/July2017/vPDYEjXZUVjZynuV8cI4.png',
                'password'       => bcrypt('Test1234'),
                'remember_token' => str_random(60),
                'role_id'        => $role2->id,
            ]);

            User::create([
                'name'           => 'Ada Lii',
                'email'          => 'test2@example.com',
                'avatar'         => 'users/July2017/N8vcOtqY7kf7cwAGZL07.png',
                'password'       => bcrypt('Test1234'),
                'remember_token' => str_random(60),
                'role_id'        => $role2->id,
            ]);

            User::create([
                'name'           => 'Richard Carl',
                'email'          => 'test3@example.com',
                'avatar'         => 'users/July2017/Nn0kAh44f3I8iIIXBVwt.png',
                'password'       => bcrypt('Test1234'),
                'remember_token' => str_random(60),
                'role_id'        => $role2->id,
            ]);

            User::create([
                'name'           => 'Thomas Paul',
                'email'          => 'test4@example.com',
                'avatar'         => 'users/July2017/belCtkLntwSRMM1WhtMI.png',
                'password'       => bcrypt('Test1234'),
                'remember_token' => str_random(60),
                'role_id'        => $role2->id,
            ]);
        }
    }
}
