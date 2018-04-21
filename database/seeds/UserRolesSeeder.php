<?php

use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => \App\User::where('name', 'admin')->first()->id,
                'role_id' => \App\Role::where('name', 'admin')->first()->id
            ],
            [
                'user_id' => \App\User::where('name', 'editor')->first()->id,
                'role_id' => \App\Role::where('name', 'admin')->first()->id
            ],
            [
                'user_id' => \App\User::where('name', 'guest')->first()->id,
                'role_id' => \App\Role::where('name', 'guest')->first()->id
            ]
        ];

        \DB::table('user_roles')->insert($data);
    }
}
