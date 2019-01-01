<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
 \DB::table('users')->delete();
        $user = new \App\User();
        $user->name = 'aliirawan';
        $user->email = 'boylevantz@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();
    }
}
