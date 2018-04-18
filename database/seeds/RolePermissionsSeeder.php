<?php

use Illuminate\Database\Seeder;

class RolePermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $perm = new \App\Models\Permission();
        $permissions_list = $perm->all();

        $admin_role_id = \App\Role::where('name', 'admin')->firstOrFail()->id;


        $guest_role_id = \App\Role::where('name', 'guest')->firstOrFail()->id;
        $editor_role_id = \App\Role::where('name', 'editor')->firstOrFail()->id;

        $category_prefix = \App\Http\Controllers\Api\CategoryController::class;
        $news_view_prefix = \App\Http\Controllers\Admin\NewsViewController::class;
        $news_api_prefix = \App\Http\Controllers\Api\NewsController::class;


        $roles_list = [
            'admin' => $admin_role_id,
            'editor' => $editor_role_id,
            'guest' => $guest_role_id
        ];

        $guest_permissions_array = [
            $news_api_prefix . '@index',
            $news_api_prefix . '@show',
            $news_view_prefix . '@index',
            $news_view_prefix . '@show'
        ];

        $editor_permissions_array = [
            $news_api_prefix . '@index',
            $news_api_prefix . '@show',
            $news_api_prefix . '@edit',
            $news_api_prefix . '@update',
            $news_view_prefix . '@index',
            $news_view_prefix . '@show',
            $news_view_prefix . '@edit',
            $news_view_prefix . '@update',
        ];

        foreach($roles_list as $role => $role_id) {
           switch ($role){
               case 'admin':
                   foreach ($permissions_list as $item) {
                       $data[] = [
                           'role_id' => $role_id,
                           'permission_id' => $item->id
                       ];
                   }
                   break;

               case 'editor':
                   foreach ($editor_permissions_array as $item) {
                       if($perm->where('action_name', $item)->count() >0 ) {
                           $data[] = [
                               'role_id' => $role_id,
                               'permission_id' => $perm->where('action_name', $item)->get()->first()->id
                           ];
                       }
                   }
                   break;
               case 'guest':
                   foreach($guest_permissions_array as $item) {
                       if($perm->where('action_name', $item)->count() >0 ){
                           $data[] = [
                               'role_id' => $role_id,
                               'permission_id' => $perm->where('action_name', $item)->get()->first()->id
                           ];
                       }
                   }
           }
        }


        \DB::table('role_permissions')->insert($data);
    }
}
