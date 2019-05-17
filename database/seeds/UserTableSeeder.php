<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = Migrations::$USERS;

        foreach ($users as $user) {
            $user['password'] = Hash::make($user['password']);
            User::create($user);
        }
    }
}
