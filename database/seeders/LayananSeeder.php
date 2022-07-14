<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Layanan;
class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'name' => 'Cuci Kilat',
                'price' => 8000,
            ],
            [
                'id' => '2',
                'name' => 'Cuci Setrika',
                'price' => 5500,
            ], [
                'id' => '3',
                'name' => 'Cuci kering',
                'price' => 4500,
            ], [
                'id' => '4',
                'name' => 'Setrika',
                'price' => 4500,
            ], [
                'id' => '5',
                'name' => 'Cuci Sepatu',
                'price' => 17500,
            ], [
                'id' => '6',
                'name' => 'Cuci Helm',
                'price' => 17500,
            ], [
                'id' => '7',
                'name' => 'Bedcover',
                'price' => 20000,
            ], [
                'id' => '8',
                'name' => 'Selimut',
                'price' => 10000,
            ],
            [
                'id' => '9',
                'name' => 'Lainnya',
                'price' => 0,
            ]
        ];

        
        foreach ($data as $item) {
            Layanan::create($item);
        }
    }
}
