<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('barang')->insertOrIgnore([
            [
                'id' => 1,
                'kode_barang' => 'BRG0001',
                'nama_barang' => 'Aqua Gelas',
                'kategori_barang' => 'Minuman',
                'harga' => '2500',
                'jumlah' => 50
            ],
            [
                'id' => 2,
                'kode_barang' => 'BRG0002',
                'nama_barang' => 'Baju',
                'kategori_barang' => 'Pakaian',
                'harga' => '50000',
                'jumlah' => 2
            ]
        ]);
    }
}
