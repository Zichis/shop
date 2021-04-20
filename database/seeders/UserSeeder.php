<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'email' => 'johndoe@company.com',
            'password' => Hash::make('password')
        ]);

        $profile = Profile::create([
            'user_id' => $user->id,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'phone_number' => '08012345678',
            'address' => '19 Crawford Avenue, Lagos'
        ]);

        $permissionsArray = ['add product', 'update product', 'delete product', 'view products'];
        $admin = Role::create(['name' => 'ADMIN_ROLE']);

        foreach ($permissionsArray as $permission) {
            $admin->givePermissionTo(Permission::create(['name' => $permission]));
        }

        $user->assignRole($admin);
    }
}
