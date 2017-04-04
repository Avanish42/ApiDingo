<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $data=array();


        $owner = new Role();
        $owner->name = "Admin";
        $owner->display_name = "Admin User";
        $owner->description = " Admin  is the Empoyee of a given project";
        $owner->save();
        $owner = new Role();
        $owner->name = "owner";
        $owner->display_name = "Product Owner";
        $owner->description = " Product Owner is the owner of a given project";
        $owner->save();


    }
}
