<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataserverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 1000; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('dataservers')->insert([
                'nama' => '$faker->name',
                'alamatip' => '$faker->name',
                'namaserver' => '$faker->name',
                'memori' => '$faker->address',
                'prosesor' => '$faker->name',
                'hardisk' => '$faker->address',
                'statushardisk' => '$faker->address',
                'tanggalupdate' => date('Y-m-d', strtotime('2022/03/22')),
                'fungsiserver' => '$faker->address',
                'keterangan' => '$faker->address',
            ]);
        }
    }
}
