<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::table('carts')->delete();

        // DB::table('carts')->insert(array(
        //     0 =>
        //     array(
        //         'cart_id' => 1,
        //         'product_id' => 1,
        //         'price' => '15500',
        //         'user_id' => 1,
        //         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //         'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     )
        //     // 2024-02-29 13:41:57
        // ));
    }
}
