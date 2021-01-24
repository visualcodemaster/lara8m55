<?php
namespace Database\Seeders;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Super Admin',
            'slug' => 'superadmin',
            'description' => 'Role for super admin',
            'guard_name' => 'web',
            'permissions' =>'{"home.index":true,"admin.dashboard":true,"users.attach.role.index":true,"users.attach.role.store":true,"users.index":true,"users.create":true,"users.store":true,"users.show":true,"users.edit":true,"users.update":true,"users.destroy":true,"roles.attached.users":true,"roles.permissions":true,"roles.permissions.store":true,"roles.index":true,"roles.create":true,"roles.store":true,"roles.show":true,"roles.edit":true,"roles.update":true,"roles.destroy":true}',
            'created_by' =>1,
            'updated_by' =>1,

        ]);

        Role::create([
            'name' => 'User',
            'slug' => 'user',
            'description' => 'Role for users',
            'guard_name' => 'web',
            'permissions' =>'{"home.index":true,"users.dashboard":true}',
            'created_by' =>1,
            'updated_by' =>1,

        ]);

        $user = User::find(1);

        $user->roles()->attach(1);

        $user = User::find(2);

        $user->roles()->attach(2);
    }
}
