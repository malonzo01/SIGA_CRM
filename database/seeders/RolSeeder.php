<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $role1 = Role::create(['name' => 'Webmaster']);
    $role2 = Role::create(['name' => 'Administrador']);
    $role3 = Role::create(['name' => 'Vendedor']);

    Permission::create(['name' => 'admin', 'description' => 'Ver Dashboard'])->syncRoles([$role1, $role2, $role3]);

    Permission::create(['name' => 'admin.users.index', 'description' => 'Ver Listado de Users'])->syncRoles([$role1, $role2]);
    Permission::create(['name' => 'admin.users.create', 'description' => 'Crear User'])->syncRoles([$role1, $role2]);
    Permission::create(['name' => 'admin.users.edit', 'description' => 'Asignar un Rol'])->syncRoles([$role1, $role2]);

    Permission::create(['name' => 'admin.roles.index', 'description' => 'Ver Listado de Roles'])->syncRoles([$role1, $role2]);
    Permission::create(['name' => 'admin.roles.create', 'description' => 'Crear Roles'])->syncRoles([$role1, $role2]);
    Permission::create(['name' => 'admin.roles.edit', 'description' => 'Editar Roles'])->syncRoles([$role1, $role2]);
    Permission::create(['name' => 'admin.roles.destroy', 'description' => 'Eliminar Roles'])->syncRoles([$role1]);
/*
    Permission::create(['name' => 'blog.admin.categories.index', 'description' => 'Ver listado de Categorias'])->syncRoles([$role1, $role2, $role3]);
    Permission::create(['name' => 'blog.admin.categories.create', 'description' => 'Crear Categorias'])->syncRoles([$role1, $role2]);
    Permission::create(['name' => 'blog.admin.categories.edit', 'description' => 'Editar Categorias'])->syncRoles([$role1, $role2]);
    Permission::create(['name' => 'blog.admin.categories.destroy', 'description' => 'Eliminar Categorias'])->syncRoles([$role1, $role2]);

    Permission::create(['name' => 'blog.admin.tags.index', 'description' => 'Ver listado de Etiquetas'])->syncRoles([$role1, $role2, $role3]);
    Permission::create(['name' => 'blog.admin.tags.create', 'description' => 'Crear Etiquetas'])->syncRoles([$role1, $role2]);
    Permission::create(['name' => 'blog.admin.tags.edit', 'description' => 'Editar Etiquetas'])->syncRoles([$role1, $role2]);
    Permission::create(['name' => 'blog.admin.tags.destroy', 'description' => 'Eliminar Etiquetas'])->syncRoles([$role1, $role2]);

    Permission::create(['name' => 'blog.admin.posts.index', 'description' => 'Ver Listado de Posts'])->syncRoles([$role1, $role2, $role3]);
    Permission::create(['name' => 'blog.admin.posts.create', 'description' => 'Crear Posts'])->syncRoles([$role1, $role2, $role3]);
    Permission::create(['name' => 'blog.admin.posts.edit', 'description' => 'Editar Posts'])->syncRoles([$role1, $role2, $role3]);
    Permission::create(['name' => 'blog.admin.posts.destroy', 'description' => 'Eliminar Posts'])->syncRoles([$role1, $role2, $role3]);
*/
  }
}
