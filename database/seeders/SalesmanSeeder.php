<?php

namespace Database\Seeders;

use App\Models\Salesman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalesmanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Salesman::create([
            'salesman_name' => 'Lauda',
            'salesman_city' => 'New York',
            'commissions' => 0.15
        ]);
        Salesman::create([
            'salesman_name' => 'Miomio',
            'salesman_city' => 'Los Angeles',
            'commissions' => 0.12
        ]);
        Salesman::create([
            'salesman_name' => 'Kamile',
            'salesman_city' => 'Houston',
            'commissions' => 0.10
        ]);
        Salesman::create([
            'salesman_name' => 'Agus',
            'salesman_city' => 'Chicago',
            'commissions' => 0.14
        ]);
    }
}
