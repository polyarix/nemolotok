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
        $this->call(RolesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(RolePermissionsSeeder::class);
        $this->call(UserRolesSeeder::class);
        $this->call(RulesSeeder::class);
        $this->call(RolesRulesSeeder::class);
    }
}
