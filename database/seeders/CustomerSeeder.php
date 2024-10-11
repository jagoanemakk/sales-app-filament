<?php

namespace Database\Seeders;

use App\Models\Customers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customers::create([
            'customer_name' => 'Alpha Corp',
            'customer_city' => 'New York'
        ]);

        Customers::create([
            'customer_name' => 'Beta Ltd',
            'customer_city' => 'London'
        ]);

        Customers::create([
            'customer_name' => 'Gamma Inc',
            'customer_city' => 'Sydney'
        ]);

        Customers::create([
            'customer_name' => 'Delta Corp',
            'customer_city' => 'Madrid'
        ]);
    }
}
