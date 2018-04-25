<?php

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
        $data = [

            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
                'remember_token' => str_random(60),
                'api_token' => str_random(60)
            ],

            [
                'name' => 'editor',
                'email' => 'editor@editor.com',
                'password' => Hash::make('editor'),
                'remember_token' => str_random(60),
                'api_token' => str_random(60)
            ],

            [
                'name' => 'guest',
                'email' => 'guest@guest.com',
                'password' => Hash::make('guest'),
                'remember_token' => str_random(60),
                'api_token' => str_random(60)
            ]
        ];

        \DB::table('users')->insert($data);
    }
}
