<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            'id' => 1,
            'name'=> '山田　太郎',
            'email'=> 'tamada_t@gmail.com',
            'email_verified_at'=> 'tamada_t@gmail.com',
            'password'=> 12345678,
            'authority'=> 3,
            'is_show'=> 1,
        ];
        DB::table('users') -> insert($param);

        $param=[
            'id' => 2,
            'name'=> '徳島　太郎',
            'email'=> 'kokushima_t@gmail.com',
            'email_verified_at'=> 'tokushima_t@gmail.com',
            'password'=> 12345678,
            'authority'=> 2,
            'is_show'=> 1,
        ];
        DB::table('users') -> insert($param);

        $param=[
            'id' => 3,
            'name'=> '徳島　次郎',
            'email'=> 'kokushima_j@gmail.com',
            'email_verified_at'=> 'tokushima_j@gmail.com',
            'password'=> 12345678,
            'authority'=> 1,
            'is_show'=> 1,
        ];
        DB::table('users') -> insert($param);
    }
}
