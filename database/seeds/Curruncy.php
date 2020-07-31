<?php

use Illuminate\Database\Seeder;
use App\Curruncies;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class Curruncy extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $json = File::get('C:\xampp\htdocs\task2\database\seeds\Common-Currency.json');
        $data = json_decode($json);

        foreach ($data as $obj){
            DB::table('curruncy')->insert([
                'name'=>$obj->name,
                'code'=>$obj->code,
            ]);

        }


    }
}
