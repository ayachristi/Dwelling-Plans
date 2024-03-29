<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StoreyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::table('storey')->delete();

        DB::table('storey')->insert(array(
            0 =>
            array(
                'storey_id' => 1,
                'perspective_3d_price' => '1000',
                'floor_plan_price' => '3000',
                'interior_price' => '1500',
                'full_set_price' => '10000',
                'floor_type' => '1',
            ),
            1 =>
            array(
                'storey_id' => 2,
                'perspective_3d_price' => '2000',
                'floor_plan_price' => '4500',
                'interior_price' => '2500',
                'full_set_price' => '15000',
                'floor_type' => '2',
            ),
            2 =>
            array(
                'storey_id' => 3,
                'perspective_3d_price' => '3000',
                'floor_plan_price' => '6000',
                'interior_price' => '3500',
                'full_set_price' => '20000',
                'floor_type' => '3',
            ),
            3 =>
            array(
                'storey_id' => 4,
                'perspective_3d_price' => '4000',
                'floor_plan_price' => '7500',
                'interior_price' => '4500',
                'full_set_price' => '25000',
                'floor_type' => '4',
            ),
            4 =>
            array(
                'storey_id' => 5,
                'perspective_3d_price' => '5000',
                'floor_plan_price' => '9000',
                'interior_price' => '5500',
                'full_set_price' => '30000',
                'floor_type' => '5',
            ),
        ));
    }
}
