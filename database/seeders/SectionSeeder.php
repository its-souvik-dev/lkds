<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sections')->insert([
            [
                'section' => 'ক',
                'limit' => 'নার্সারি থেকে প্রাক-প্রাথমিক',
                'subject' => 'যেমনে খুশি আঁকো',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'section' => 'খ',
                'limit' => 'প্রথম শ্রেণী থেকে দ্বিতীয় শ্রেণী',
                'subject' => 'যেমনে খুশি আঁকো',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'section' => 'গ',
                'limit' => 'তৃতীয় শ্রেণী থেকে চতুর্থ শ্রেণী',
                'subject' => 'আমাদের চারপাশে আলো',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'section' => 'ঘ',
                'limit' => 'পঞ্চম শ্রেণী থেকে ষষ্ঠ শ্রেণী',
                'subject' => 'সমাজসেবা',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'section' => 'ঙ',
                'limit' => 'সপ্তম শ্রেণী থেকে অষ্টম শ্রেণী',
                'subject' => 'দুর্গা পূজোর থিম',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'section' => 'চ',
                'limit' => 'নবম শ্রেণী থেকে দশম শ্রেণী',
                'subject' => 'প্রকৃতি সংরক্ষণ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'section' => 'ছ',
                'limit' => 'একাদশ শ্রেণী থেকে দ্বাদশ শ্রেণী',
                'subject' => 'মডেল: স্বাধীনতা রাম',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
