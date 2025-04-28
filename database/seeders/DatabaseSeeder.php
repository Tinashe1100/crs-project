<?php

namespace Database\Seeders;

use App\Models\CorruptionType;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        CorruptionType::create([
            'name' => 'Bribery',
        ]);
        CorruptionType::create([
            'name' => 'Embelzzlement',
        ]);
        CorruptionType::create([
            'name' => 'Extortion',
        ]);
        CorruptionType::create([
            'name' => 'Fraud',
        ]);
        CorruptionType::create([
            'name' => 'Money Laundering',
        ]);
        CorruptionType::create([
            'name' => 'Tax Evasion',
        ]);
        CorruptionType::create([
            'name' => 'Obstruction of Justice',
        ]);
        CorruptionType::create([
            'name' => 'False Accounting',
        ]);
        CorruptionType::create([
            'name' => 'Misappropriation of Assets',
        ]);
    }
}
