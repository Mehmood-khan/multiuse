<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$Gx8a0yLLgz3OUxrm9CcEWOp1Is3dIBNwSLEXEyfFha5/FFfXTDBty',
                'remember_token' => null,
                'created_at'     => '2019-09-26 06:40:04',
                'updated_at'     => '2019-09-26 06:40:04',
            ],
        ];

        User::insert($users);
    }
}
