<?php

use Illuminate\Database\Seeder;

class RolesRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = \App\Role::where('name', 'admin')->first();
        $role_admin->rules()->attach(\App\Models\Rule::where('name', 'Admin')->firstOrFail()->id);
    }
}
