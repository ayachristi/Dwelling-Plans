<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();
        DB::table('users')->insert(array(
            0 =>
            array(
                'user_id' => 1,
                'email' => 'jane_doe@dwells.com',
                'password' => '$argon2id$v=19$m=65536,t=4,p=1$QlFxdHBoYXpyS1dpU3lGSQ$4lkac1ZaW//txmVp7GaRBh/K3egluVSUlK8Q63KoC7Y',
                'account_type' => 'super admin',
                'first_name' => 'jane',
                'last_name' => 'doe',
            ),
            1 =>
            array(
                'user_id' => 2,
                'email' => 'john_smith@dwells.com',
                'password' => '$argon2id$v=19$m=65536,t=4,p=1$QlFxdHBoYXpyS1dpU3lGSQ$4lkac1ZaW//txmVp7GaRBh/K3egluVSUlK8Q63KoC7Y',
                'account_type' => 'admin',
                'first_name' => 'john',
                'last_name' => 'smith',
            ),
            2 =>
            array(
                'user_id' => 3,
                'email' => 'jayvee_siuagan@dwells.com',
                'password' => '$argon2id$v=19$m=65536,t=4,p=1$QlFxdHBoYXpyS1dpU3lGSQ$4lkac1ZaW//txmVp7GaRBh/K3egluVSUlK8Q63KoC7Y',
                'account_type' => 'user',
                'first_name' => 'jayvee',
                'last_name' => 'siuagan',
            ),
            3 =>
            array(
                'user_id' => 4,
                'email' => 'jeininlei_arellano@dwells.com',
                'password' => '$argon2id$v=19$m=65536,t=4,p=1$QlFxdHBoYXpyS1dpU3lGSQ$4lkac1ZaW//txmVp7GaRBh/K3egluVSUlK8Q63KoC7Y',
                'account_type' => 'super admin',
                'first_name' => 'Jeinin Lei',
                'last_name' => 'Arellano',
            )
        ));
    }
}
