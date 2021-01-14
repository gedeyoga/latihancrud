<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nim' => '19101290',
            'nama' => 'Gede Yoga Permana Putra',
            'alamat' => 'Jln. Kertapura Gang Segina IIB No. 26x',
            'jurusan_id' => '1'
        ]);
    }
}
