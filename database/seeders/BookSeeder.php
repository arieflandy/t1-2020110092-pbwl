<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            $isbn = $faker->numberBetween(30,100);
            $judul = $faker->sentence(6);
            $halaman = $faker->numberBetween(0,2);
            $katagori = $faker->sentence(6);
            $penerbit = $faker->sentence(20);
            $created_at = $faker->dateTimeBetween('-3 months', 'now');

            DB::table('books')->insert([
                'isbn' => $isbn,
                'judul' => $judul,
                'halaman' => $halaman,
                'katagori' => $katagori,
                'penerbit' => $penerbit,
                'created_at' => $created_at,
                'updated_at' => $created_at,
            ]);
        }
    }
}
