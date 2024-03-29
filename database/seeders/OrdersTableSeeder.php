<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->delete();

        // DB::table('orders')->insert(array(
        //     0 =>
        //     array(
        //         'order_id' => '1',
        //         'time_placed' => Carbon::now()->format('Y-m-d H:i:s'),
        //         'status' => 'pending',
        //         'user_id' => '1',
        //     )
        // ));
    }
}
