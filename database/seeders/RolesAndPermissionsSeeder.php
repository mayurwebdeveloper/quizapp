<?php
// database/seeders/RolesAndPermissionsSeeder.php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Create permissions
        $editArticlesPermission = Permission::create(['name' => 'edit articles']);
        $viewArticlesPermission = Permission::create(['name' => 'view articles']);

        // Assign permissions to roles
        $adminRole->givePermissionTo($editArticlesPermission);
        $adminRole->givePermissionTo($viewArticlesPermission);
        $userRole->givePermissionTo($viewArticlesPermission);
    }
}
