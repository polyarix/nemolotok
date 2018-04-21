<?php

use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $route_collection = Route::getRoutes();

        foreach($route_collection as $item) {
            if(preg_match('~(admin|api)~', $item->getPrefix())) {
                $data[] = [
                    'action_name' => $item->getActionName(),
                    'route_name' => $item->getName(),
                ];
            }
        }

        \DB::table('permissions')->insert($data);
    }
}
