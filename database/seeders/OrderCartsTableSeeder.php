<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrderCartsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::table('order_carts')->delete();

        // DB::table('order_carts')->insert(array(
        //     0 =>
        //     array(
        //         'oc_id' => '1',
        //         'order_id' => '1',
        //         'cart_id' => '1',
        //     )
        //     // 2024-02-29 13:41:57
        // ));
    }
}
