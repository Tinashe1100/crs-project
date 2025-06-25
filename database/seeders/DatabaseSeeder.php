<?php

namespace Database\Seeders;

use App\Models\CorruptionType;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        // CorruptionType::create([
        //     'name' => 'Bribery',
        // ]);
        // CorruptionType::create([
        //     'name' => 'Embelzzlement',
        // ]);
        // CorruptionType::create([
        //     'name' => 'Extortion',
        // ]);
        // CorruptionType::create([
        //     'name' => 'Fraud',
        // ]);
        // CorruptionType::create([
        //     'name' => 'Money Laundering',
        // ]);
        // CorruptionType::create([
        //     'name' => 'Tax Evasion',
        // ]);
        // CorruptionType::create([
        //     'name' => 'Obstruction of Justice',
        // ]);
        // CorruptionType::create([
        //     'name' => 'False Accounting',
        // ]);
        // CorruptionType::create([
        //     'name' => 'Misappropriation of Assets',
        // ]);

        DB::table('reports')->insert([
            [
                'corruption_type' => 1,
                'evidence' => 'Photo of money exchange',
                'location' => 'Nairobi, Kenya',
                'reporter' => 'John Doe',
                'details' => 'A government official was caught accepting a bribe during a license approval process.',
                'status' => true,
                'corruption_date' => '2024-11-10',
            ],
            [
                'corruption_type' => 1,
                'evidence' => 'Bank statements',
                'location' => 'Lagos, Nigeria',
                'reporter' => 'Jane Smith',
                'details' => 'Funds allocated for school construction were diverted to personal accounts.',
                'status' => false,
                'corruption_date' => '2024-08-25',
            ],
            [
                'corruption_type' => 1,
                'evidence' => 'Emails showing favoritism',
                'location' => 'Accra, Ghana',
                'reporter' => 'Michael Otieno',
                'details' => 'A high-ranking officer appointed relatives to top roles without qualifications.',
                'status' => true,
                'corruption_date' => '2024-06-15',
            ],
            [
                'corruption_type' => 1,
                'evidence' => 'Fake invoices',
                'location' => 'Kampala, Uganda',
                'reporter' => 'Sarah Kimani',
                'details' => 'Procurement of supplies was awarded to a ghost company linked to a senior official.',
                'status' => false,
                'corruption_date' => '2024-09-03',
            ],
            [
                'corruption_type' => 1,
                'evidence' => 'Voice note of negotiation',
                'location' => 'Johannesburg, SA',
                'reporter' => 'David Moyo',
                'details' => 'Officials received kickbacks for awarding a construction tender.',
                'status' => true,
                'corruption_date' => '2024-12-01',
            ],
            [
                'corruption_type' => 1,
                'evidence' => 'Signed reports, receipts',
                'location' => 'Harare, Zimbabwe',
                'reporter' => 'Rose Njeri',
                'details' => 'Budget meant for clean water was misused for personal travel and luxury spending.',
                'status' => false,
                'corruption_date' => '2024-07-20',
            ],
            [
                'corruption_type' => 1,
                'evidence' => 'Internal HR documents',
                'location' => 'Addis Ababa, Ethiopia',
                'reporter' => 'Peter Wanjiku',
                'details' => 'Internal promotions bypassed qualified candidates in favor of acquaintances.',
                'status' => true,
                'corruption_date' => '2024-10-11',
            ],
            [
                'corruption_type' => 1,
                'evidence' => 'CCTV footage',
                'location' => 'Lusaka, Zambia',
                'reporter' => 'Aisha Abdalla',
                'details' => 'Customs officials were filmed accepting bribes to clear undeclared goods.',
                'status' => true,
                'corruption_date' => '2024-11-22',
            ],
            [
                'corruption_type' => 1,
                'evidence' => 'Recorded phone call',
                'location' => 'Kigali, Rwanda',
                'reporter' => 'Tom Muriuki',
                'details' => 'A building inspector demanded money to approve construction that already met all standards.',
                'status' => false,
                'corruption_date' => '2024-05-18',
            ],
            [
                'corruption_type' => 1,
                'evidence' => 'Email trail and forged documents',
                'location' => 'Dar es Salaam, TZ',
                'reporter' => 'Nancy Karanja',
                'details' => 'A staff member created fake IDs to access social development funds.',
                'status' => true,
                'corruption_date' => '2024-04-30',
            ],
        ]);


        DB::table('statuses')->insert([
            [
                'name' => 'Pending',
                'desc' => 'Case is being reviewed and investigated'
            ],
            [
                'name' => 'Ongoing',
                'desc' => 'Investigation is currently underway'
            ],
            [
                'name' => 'Charges Pending',
                'desc' => 'Charges are being prepared and will be filed soon'
            ],
            [
                'name' => 'Convicted',
                'desc' => 'Accused person has been found guilty and convicted'
            ],
            [
                'name' => 'Acquitted',
                'desc' => 'Accused person has been found not guilty'
            ],
            [
                'name' => 'Unresolved',
                'desc' => 'Case remains unsolved or ongoing'
            ],
            [
                'name' => 'Evidence Collection',
                'desc' => 'Gathering evidence and interviewing witnesses'
            ],
            [
                'name' => 'Forensic Analysis',
                'desc' => 'Forensic analysis is being conducted on evidence'
            ],
            [
                'name' => 'Prosecution Pending',
                'desc' => 'Case is being prepared for prosecution'
            ],
            [
                'name' => 'Trial Ongoing',
                'desc' => 'Trial is currently underway'
            ],
            [
                'name' => 'Sentencing',
                'desc' => 'Accused person is awaiting sentencing',
            ],
            [
                'name' => 'Appeal',
                'desc' => 'Case is on appeal',
            ],

        ]);
    }
}
