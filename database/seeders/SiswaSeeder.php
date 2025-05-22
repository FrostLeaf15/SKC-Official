<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = \Faker\Factory::create();

        foreach (range(1, 10) as $index) {
            DB::table('student')->insert([
                'nama' => $faker->name,
                'jurusan' => $faker->randomElement(['Teknologi Laboratorium Medik', 'Asisten Keperawatan', 'Farmasi Klinis dan Komunitas']),
                'jurusan_2' => $faker->randomElement(['Asisten Keperawatan', 'Farmasi Klinis dan Komunitas', 'Teknologi Laboratorium Medik']),
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date,
                'alamat' => $faker->address,
                'kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'nisn' => $faker->unique()->numerify('##########'),
                'sekolahAsal' => $faker->company,
                'nmorngtuawali' => $faker->name,
                'nmrkonfirmasi' => $faker->phoneNumber,
                'rekomendasi' => $faker->sentence,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
