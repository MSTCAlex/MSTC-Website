<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        	DB::table('roles')->insert(
            array(
                array('name' => 'President', 'label' => 'President'),
                array('name' => 'Head', 'label' => 'Head'),
                array('name' => 'Vice Head', 'label' => 'ViceHead'),
                array('name' => 'Member', 'label' => 'Member'),
                ));

        DB::table('permissions')->insert(
                array(
                    array('name' => 'Create-Task', 'label' => 'Create-Task'),
                    array('name' => 'Create-Poll', 'label' => 'Create-Poll'),
                    array('name' => 'Create-Event', 'label' => 'Create-Event'),
                    array('name' => 'Create-News', 'label' => 'Create-News'),
                    array('name' => 'Show-Sub', 'label' => 'Show-Sub'),
                    array('name' => 'Create-User', 'label' => 'Create-User'),
                    array('name' => 'Edit-Roles', 'label' => 'Edit-Roles'),
                    ));
    }
}
