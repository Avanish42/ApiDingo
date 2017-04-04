<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user= new User();
        $user->name="avanish";
        $user->email="avisingh@gmail.com";
        $user->password=bcrypt('admin@123');
        $user->save();

    }
}
