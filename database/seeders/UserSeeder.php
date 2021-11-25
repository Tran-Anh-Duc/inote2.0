<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        $user = new User();
        $user->name = "anh duc";
        $user->email = "trananhducty@gmail.com";
        $user->password = Hash::make('123456');
        $user->save();

        $user = new User();
        $user->name = "anh duc1";
        $user->email = "trananhhducti@gmail.com";
        $user->password = Hash::make('123456');
        $user->save();

        $user = new User();
        $user->name = "anh duc2";
        $user->email = "trananhhducti1@gmail.com";
        $user->password = Hash::make('123456');
        $user->save();

        $user = new User();
        $user->name = "anh duc2";
        $user->email = "trananhhducti2@gmail.com";
        $user->password = Hash::make('123456');
        $user->save();
    }

}
