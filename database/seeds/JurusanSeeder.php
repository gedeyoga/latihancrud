<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['jurusan' => 'TI-MTI'], 
            ['jurusan' => 'TI-KAB'],
            ['jurusan' => 'TI-DGM'],
            ['jurusan' => 'Sistem Komputer']
        ];
        for($i=0;$i<count($data);$i++){
            DB::table('jurusan')->insert($data[$i]);
        }
    }
}
