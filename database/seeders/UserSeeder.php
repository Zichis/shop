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
        // Create user
        $user = User::create([
            'email' => 'admin@company.com',
            'password' => Hash::make('password')
        ]);

        $profile = Profile::create([
            'user_id' => $user->id,
            'first_name' => 'admin',
            'last_name' => 'admin',
            'phone_number' => '08012345678',
            'address' => '19 Crawford Avenue, Lagos'
        ]);

        $adminPermissionsArray = ['add product', 'update product', 'delete product', 'view products'];
        $customerPermissionsArray = ['view profile', 'make order', 'view orders', 'remove orders', 'update orders'];
        $admin = Role::create(['name' => 'ROLE_ADMIN']);
        $customer = Role::create(['name' => 'ROLE_CUSTOMER']);

        foreach ($adminPermissionsArray as $permission) {
            $admin->givePermissionTo(Permission::create(['name' => $permission]));
        }

        foreach ($customerPermissionsArray as $permission) {
            $customer->givePermissionTo(Permission::create(['name' => $permission]));
        }

        $user->assignRole($admin);
    }
}
