<?php

namespace Database\Seeders;

use App\Models\Orders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Orders::create([
            'salesman_id' => 1,
            'customer_id' => 1,
            'order_date' => '2023-01-01',
            'amount' => 200.00
        ]);

        Orders::create([
            'salesman_id' => 2,
            'customer_id' => 1,
            'order_date' => '2023-01-02',
            'amount' => 250.00
        ]);

        Orders::create([
            'salesman_id' => 3,
            'customer_id' => 2,
            'order_date' => '2023-01-03',
            'amount' => 150.00
        ]);

        Orders::create([
            'salesman_id' => 4,
            'customer_id' => 3,
            'order_date' => '2023-01-04',
            'amount' => 300.00
        ]);

        Orders::create([
            'salesman_id' => 1,
            'customer_id' => 2,
            'order_date' => '2023-01-05',
            'amount' => 400.00
        ]);

        Orders::create([
            'salesman_id' => 2,
            'customer_id' => 3,
            'order_date' => '2023-01-06',
            'amount' => 350.00
        ]);

        Orders::create([
            'salesman_id' => 3,
            'customer_id' => 1,
            'order_date' => '2023-01-07',
            'amount' => 500.00
        ]);
        Orders::create([
            'salesman_id' => 3,
            'customer_id' => 4,
            'order_date' => '2023-01-08',
            'amount' => 200.00
        ]);
    }
}
