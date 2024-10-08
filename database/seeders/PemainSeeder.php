<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PemainMu;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 11; $i++) {
            PemainMu::create([
                'nama_pemain' => fake()->name(),
                'no_punggung' => fake()->numberBetween(1, 99),
                'posisi' => fake()->randomElement(['Penyerang', 'Gelandang', 'Bek', 'Kiper']),
            ]);
        }
    }
}
