<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name' =>'Gerencia']);
        $role3 = Role::create(['name' =>'Vendedor']);

        Permission::create(['name' => 'Modulo Usuarios'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'Modulo Articulos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'Modulo Categorias'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'Modulo Unidades Medida'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'Modulo Ingresos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'Modulo Ventas'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'Modulo Tiendas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'Modulo Empresas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'Modulo Comprobantes'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'Modulo Duas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'Modulo Prestamos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'Modulo Proveedores'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'Modulo Pagos Proveedores'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'Modulo Dashboard'])->syncRoles([$role1, $role2, $role3]);
    }
}
