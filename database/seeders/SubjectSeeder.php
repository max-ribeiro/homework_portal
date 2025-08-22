<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            'Matemática',
            'Português',
            'Inglês',
            'História',
            'Geografia',
            'Ciências',
            'Artes',
            'Educação Física',
            'Física',
            'Química',
            'Biologia',
        ];

        foreach ($subjects as $name) {
            Subject::create(['name' => $name]);
        }
    }
}
