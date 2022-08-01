<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            [
                'name' => 'Surya Intan Permana',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('asdasdasd'),
                'foto' => '/img/user.png',
                'level' => 1
            ],
            [
                'name' => 'Ahmad Maulana',
                'email' => 'kasir@gmail.com',
                'password' => bcrypt('asdasdasd'),
                'foto' => '/img/user.png',
                'level' => 2
            ]
        );

        array_map(function (array $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }, $users);
    }
}
