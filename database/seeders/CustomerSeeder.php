<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 50 customers with emails
        Customer::factory(40)->create();
        
        // Create 10 customers without emails
        Customer::factory(10)->withoutEmail()->create();
        
        // Create some specific customers for testing
        Customer::create([
            'name' => 'John Smith',
            'phone' => '+1234567890',
            'email' => 'john.smith@example.com',
            'address' => '123 Main Street, Downtown, City 12345',
        ]);
        
        Customer::create([
            'name' => 'Sarah Johnson',
            'phone' => '+1987654321',
            'email' => 'sarah.johnson@example.com',
            'address' => '456 Oak Avenue, Uptown, City 67890',
        ]);
        
        Customer::create([
            'name' => 'Michael Brown',
            'phone' => '+1122334455',
            'email' => null,
            'address' => '789 Pine Street, Midtown, City 54321',
        ]);
    }
}
