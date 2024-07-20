<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $role1 = Role::create(['name' => 'admin']); // Rol de admin
        $role2 = Role::create(['name' => 'usuario']); // Rol de usuario
        $user = User::find(1); // Buscamos el primer usuario
        $user->assignRole($role1); // Le asignamos rol de admin
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
};
