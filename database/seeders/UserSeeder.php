<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleInvitado = Role::create(['name' => 'invitado']);


        permission ::create(['name' => 'vista1'])->assignRole($roleInvitado);
        permission ::create(['name' => 'vista2'])->assignRole($roleAdmin);



        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->assignRole($roleAdmin);


        $user = new User;
        $user->name = 'Invitado';
        $user->email = 'invitado@email.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->assignRole($roleInvitado);
    }
}
