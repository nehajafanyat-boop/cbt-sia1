<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        Subject::insert([
            [
                'name' => 'Matematika',
                'is_active' => true,
            ],
            [
                'name' => 'Bahasa Indonesia',
                'is_active' => true,
            ],
            [
                'name' => 'Bahasa Inggris',
                'is_active' => true,
            ],
        ]);
    }
}