<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09181234567',
            ],
            [
                'full_name' => 'Pedro Reyes',
                'email' => 'pedro@example.com',
                'phone' => '09191234567',
            ],
            [
                'full_name' => 'Ana Garcia',
                'email' => 'ana@example.com',
                'phone' => '09201234567',
            ],
            [
                'full_name' => 'Luis Mendoza',
                'email' => 'luis@example.com',
                'phone' => '09211234567',
            ],
        ];

        foreach ($customers as $customer) {
            Customer::firstOrCreate(
                ['email' => $customer['email']],
                [
                    'full_name' => $customer['full_name'],
                    'phone' => $customer['phone'],
                ]
            );
        }

        $users = [
            ['username' => 'kenbacay', 'full_name' => 'Ken Bacay'],
            ['username' => 'admin01', 'full_name' => 'John Admin'],
            ['username' => 'cashier01', 'full_name' => 'Maria Lopez'],
            ['username' => 'staff01', 'full_name' => 'Daniel Cruz'],
            ['username' => 'manager01', 'full_name' => 'Sofia Reyes'],
        ];

        foreach ($users as $user) {
            User::firstOrCreate(
                ['username' => $user['username']],
                ['full_name' => $user['full_name']]
            );
        }
    }
}