<?php

use GeneaLabs\LaravelGovernor\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class LaravelGovernorRolesTableSeeder extends Seeder {
    public function run()
    {
        $user = App::make(Config::get('auth.model'));
        $superuser = $user->find($user->min($user['primaryKey']));

        $role = new Role();
        $role->name = 'SuperAdmin';
        $role->description = 'This role is for the main administrator of your site. They will be able to do absolutely everything. (This role cannot be edited.)';
        $role->save();
        $role = Role::find('SuperAdmin');
        $role->users()->attach($superuser);
        Role::create([
            'name' => 'Member',
            'description' => 'Represents the baseline registered user. Customize permissions as best suits your site.',
        ]);
    }
}
