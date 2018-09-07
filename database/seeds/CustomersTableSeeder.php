<?php

use App\Shop\Customers\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        factory(Customer::class)->create([
            "name"=> "Customer",
            "email" => "customer@customer.com",
            "password" => bcrypt("customer"),
            'status' => 1

        ]);
    }
}