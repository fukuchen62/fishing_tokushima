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

            'name'=> '山田　太郎',
            'nickname'=> 'やまちゃん',
            'email'=> 'tamada_t@gmail.com',
            'password'=> 12345678,
            'authority'=> 3,
            'is_show'=> true,
        ];
        DB::table('users') -> insert($param);

        $param=[

            'name'=> '徳島　太郎',
            'nickname'=> 'やまちゃん',
            'email'=> 'kokushima_t@gmail.com',
            'password'=> 12345678,
            'authority'=> 2,
            'is_show'=>  true,
        ];
        DB::table('users') -> insert($param);

        $param=[

            'name'=> '徳島　次郎',
            'nickname'=> '次郎',
            'email'=> 'kokushima_j@gmail.com',
            'password'=> 12345678,
            'authority'=> 1,
            'is_show'=>  true,
        ];
        DB::table('users') -> insert($param);
    }
}
