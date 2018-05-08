<?php

use Illuminate\Database\Seeder;

class RulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perm = new \App\Models\Permission();
        $permissions_list = $perm->all();
        $create_data = [
            'name' => 'Admin', 'description' => 'text',
        ];
        $rule = \App\Models\Rule::create($create_data);
        $rule->permissions()->attach($permissions_list);
    }


}
