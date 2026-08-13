<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Question;
use App\Models\Answer;

class MathQuestionSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('name', 'Matematika')->first();

        if (!$subject) {
            $subject = Subject::create([
                'name' => 'Matematika'
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 25 + 17 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '40',
            'B' => '41',
            'C' => '42',
            'D' => '43'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 48 + 36 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '82',
            'B' => '84',
            'C' => '86',
            'D' => '88'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 75 + 25 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '90',
            'B' => '95',
            'C' => '100',
            'D' => '105'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 126 + 74 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '180',
            'B' => '190',
            'C' => '200',
            'D' => '210'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 235 + 165 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '350',
            'B' => '375',
            'C' => '400',
            'D' => '425'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 80 - 35 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '40',
            'B' => '45',
            'C' => '50',
            'D' => '55'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 100 - 47 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '43',
            'B' => '53',
            'C' => '63',
            'D' => '73'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 6 × 7 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '36',
            'B' => '40',
            'C' => '42',
            'D' => '48'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 8 × 9 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '64',
            'B' => '72',
            'C' => '81',
            'D' => '90'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 12 × 5 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '50',
            'B' => '55',
            'C' => '60',
            'D' => '65'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 15 × 6 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '80',
            'B' => '90',
            'C' => '100',
            'D' => '110'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 18 × 5 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '80',
            'B' => '85',
            'C' => '90',
            'D' => '95'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 24 × 4 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '86',
            'B' => '96',
            'C' => '106',
            'D' => '116'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 25 × 8 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '180',
            'B' => '190',
            'C' => '200',
            'D' => '210'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 32 × 5 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '150',
            'B' => '160',
            'C' => '170',
            'D' => '180'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 45 × 4 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '160',
            'B' => '170',
            'C' => '180',
            'D' => '190'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 50 × 6 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '250',
            'B' => '275',
            'C' => '300',
            'D' => '325'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 42 ÷ 6 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '6',
            'B' => '7',
            'C' => '8',
            'D' => '9'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 56 ÷ 7 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '6',
            'B' => '7',
            'C' => '8',
            'D' => '9'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 72 ÷ 8 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '7',
            'B' => '8',
            'C' => '9',
            'D' => '10'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 80 ÷ 8 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '8',
            'B' => '9',
            'C' => '10',
            'D' => '12'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 90 ÷ 9 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '8',
            'B' => '9',
            'C' => '10',
            'D' => '11'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 105 ÷ 15 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '5',
            'B' => '6',
            'C' => '7',
            'D' => '8'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 132 ÷ 11 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '10',
            'B' => '11',
            'C' => '12',
            'D' => '13'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 156 ÷ 12 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '11',
            'B' => '12',
            'C' => '13',
            'D' => '14'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 175 ÷ 25 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '5',
            'B' => '6',
            'C' => '7',
            'D' => '8'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 192 ÷ 16 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '10',
            'B' => '11',
            'C' => '12',
            'D' => '13'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 210 ÷ 14 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '12',
            'B' => '13',
            'C' => '14',
            'D' => '15'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'D',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 225 ÷ 15 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '12',
            'B' => '13',
            'C' => '14',
            'D' => '15'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'D',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 240 ÷ 20 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '10',
            'B' => '12',
            'C' => '14',
            'D' => '16'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 2 + 3 × 4 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '14',
            'B' => '20',
            'C' => '24',
            'D' => '10'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'A',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 5 × 6 - 10 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '20',
            'B' => '25',
            'C' => '30',
            'D' => '40'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'A',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 40 + 20 ÷ 5 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '12',
            'B' => '44',
            'C' => '48',
            'D' => '60'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 7 × 8 - 15 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '41',
            'B' => '45',
            'C' => '49',
            'D' => '56'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'A',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 100 - 20 × 3 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '40',
            'B' => '60',
            'C' => '80',
            'D' => '240'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'A',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 12 + 18 ÷ 3 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '10',
            'B' => '18',
            'C' => '30',
            'D' => '36'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 9 × 5 + 10 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '45',
            'B' => '50',
            'C' => '55',
            'D' => '60'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah persegi memiliki sisi 8 cm. Kelilingnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '16 cm',
            'B' => '24 cm',
            'C' => '32 cm',
            'D' => '64 cm'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah persegi panjang memiliki panjang 10 cm dan lebar 5 cm. Luasnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '15 cm²',
            'B' => '30 cm²',
            'C' => '50 cm²',
            'D' => '100 cm²'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah persegi memiliki sisi 12 cm. Luasnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '24 cm²',
            'B' => '48 cm²',
            'C' => '120 cm²',
            'D' => '144 cm²'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'D',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah persegi panjang memiliki panjang 15 cm dan lebar 4 cm. Kelilingnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '19 cm',
            'B' => '30 cm',
            'C' => '38 cm',
            'D' => '60 cm'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah segitiga memiliki alas 10 cm dan tinggi 8 cm. Luasnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '20 cm²',
            'B' => '30 cm²',
            'C' => '40 cm²',
            'D' => '80 cm²'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => '1 meter sama dengan .... sentimeter.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '10',
            'B' => '50',
            'C' => '100',
            'D' => '1000'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => '1 kilogram sama dengan .... gram.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '10',
            'B' => '100',
            'C' => '500',
            'D' => '1000'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'D',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => '2 jam sama dengan .... menit.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '60',
            'B' => '90',
            'C' => '120',
            'D' => '180'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Pecahan yang senilai dengan 1/2 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '1/3',
            'B' => '2/4',
            'C' => '3/5',
            'D' => '4/6'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Pecahan yang senilai dengan 2/3 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '3/5',
            'B' => '4/6',
            'C' => '5/7',
            'D' => '6/8'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Pecahan 3/4 jika diubah menjadi desimal adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '0,25',
            'B' => '0,5',
            'C' => '0,75',
            'D' => '1,25'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Pecahan 1/4 jika diubah menjadi desimal adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '0,15',
            'B' => '0,2',
            'C' => '0,25',
            'D' => '0,5'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => '25% jika diubah menjadi pecahan adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '1/2',
            'B' => '1/3',
            'C' => '1/4',
            'D' => '1/5'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => '50% jika diubah menjadi pecahan adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '1/4',
            'B' => '1/2',
            'C' => '2/3',
            'D' => '3/4'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => '75% jika diubah menjadi pecahan adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '1/2',
            'B' => '2/3',
            'C' => '3/4',
            'D' => '4/5'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Desimal 0,5 jika diubah menjadi persen adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '5%',
            'B' => '25%',
            'C' => '50%',
            'D' => '75%'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Desimal 0,25 jika diubah menjadi persen adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '10%',
            'B' => '20%',
            'C' => '25%',
            'D' => '50%'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Desimal 0,75 jika diubah menjadi persen adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '25%',
            'B' => '50%',
            'C' => '75%',
            'D' => '80%'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah barang seharga Rp20.000 mendapat diskon 10%. Besar diskonnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'Rp1.000',
            'B' => 'Rp2.000',
            'C' => 'Rp3.000',
            'D' => 'Rp4.000'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah barang seharga Rp50.000 mendapat diskon 20%. Besar diskonnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'Rp5.000',
            'B' => 'Rp8.000',
            'C' => 'Rp10.000',
            'D' => 'Rp15.000'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah barang seharga Rp100.000 mendapat diskon 25%. Harga setelah diskon adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'Rp50.000',
            'B' => 'Rp70.000',
            'C' => 'Rp75.000',
            'D' => 'Rp80.000'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah barang seharga Rp80.000 mendapat diskon 10%. Harga setelah diskon adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'Rp70.000',
            'B' => 'Rp72.000',
            'C' => 'Rp75.000',
            'D' => 'Rp78.000'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah segitiga memiliki alas 12 cm dan tinggi 10 cm. Luasnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '50 cm²',
            'B' => '60 cm²',
            'C' => '100 cm²',
            'D' => '120 cm²'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah persegi memiliki sisi 15 cm. Keliling persegi tersebut adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '30 cm',
            'B' => '45 cm',
            'C' => '60 cm',
            'D' => '75 cm'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah persegi panjang memiliki panjang 20 cm dan lebar 8 cm. Luasnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '56 cm²',
            'B' => '120 cm²',
            'C' => '160 cm²',
            'D' => '180 cm²'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah kubus memiliki 6 sisi yang sama besar. Jika panjang rusuknya 5 cm, volumenya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '25 cm³',
            'B' => '75 cm³',
            'C' => '100 cm³',
            'D' => '125 cm³'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'D',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah balok memiliki panjang 10 cm, lebar 5 cm, dan tinggi 4 cm. Volumenya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '100 cm³',
            'B' => '150 cm³',
            'C' => '200 cm³',
            'D' => '250 cm³'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 3/4 + 1/4 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '1/2',
            'B' => '3/4',
            'C' => '1',
            'D' => '1 1/4'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 2/5 + 1/5 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '1/5',
            'B' => '2/5',
            'C' => '3/5',
            'D' => '4/5'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 5/6 - 2/6 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '1/6',
            'B' => '2/6',
            'C' => '3/6',
            'D' => '4/6'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 7/8 - 3/8 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '1/8',
            'B' => '2/8',
            'C' => '3/8',
            'D' => '4/8'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'D',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 1/2 + 1/4 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '1/4',
            'B' => '1/2',
            'C' => '3/4',
            'D' => '1'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 3/4 - 1/2 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '1/4',
            'B' => '1/2',
            'C' => '2/4',
            'D' => '3/4'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'A',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Bilangan yang merupakan kelipatan 5 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '12',
            'B' => '15',
            'C' => '17',
            'D' => '19'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Bilangan yang merupakan kelipatan 3 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '10',
            'B' => '14',
            'C' => '18',
            'D' => '20'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Faktor dari 12 yang benar adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '5',
            'B' => '6',
            'C' => '7',
            'D' => '8'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Faktor dari 18 yang benar adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '4',
            'B' => '5',
            'C' => '6',
            'D' => '7'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'KPK dari 4 dan 6 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '8',
            'B' => '10',
            'C' => '12',
            'D' => '24'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'KPK dari 6 dan 8 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '12',
            'B' => '18',
            'C' => '24',
            'D' => '48'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'FPB dari 12 dan 18 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '2',
            'B' => '3',
            'C' => '6',
            'D' => '9'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'FPB dari 20 dan 30 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '5',
            'B' => '10',
            'C' => '15',
            'D' => '20'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Jika 1 lusin berisi 12 buah, maka 3 lusin berisi .... buah.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '24',
            'B' => '30',
            'C' => '36',
            'D' => '48'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Jika 1 minggu terdiri dari 7 hari, maka 4 minggu terdiri dari .... hari.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '21',
            'B' => '28',
            'C' => '30',
            'D' => '35'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah kelas memiliki 24 siswa. Jika 1/3 siswa adalah laki-laki, jumlah siswa laki-laki adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '6',
            'B' => '8',
            'C' => '10',
            'D' => '12'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Rina memiliki 40 permen. Ia memberikan 1/4 permen kepada adiknya. Permen yang diberikan adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '5',
            'B' => '8',
            'C' => '10',
            'D' => '15'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Suhu sebuah kota pada pagi hari 24°C. Pada siang hari naik 8°C. Suhu siang hari adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '28°C',
            'B' => '30°C',
            'C' => '32°C',
            'D' => '34°C'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Ayah memiliki uang Rp100.000. Ia membeli buku seharga Rp35.000. Sisa uang Ayah adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'Rp55.000',
            'B' => 'Rp60.000',
            'C' => 'Rp65.000',
            'D' => 'Rp75.000'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah toko memiliki 5 kotak pensil. Setiap kotak berisi 12 pensil. Jumlah seluruh pensil adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '50',
            'B' => '60',
            'C' => '65',
            'D' => '72'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 125 + 275 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '300',
            'B' => '350',
            'C' => '400',
            'D' => '450'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 500 - 275 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '175',
            'B' => '200',
            'C' => '225',
            'D' => '250'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 25 × 4 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '75',
            'B' => '100',
            'C' => '125',
            'D' => '150'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 144 ÷ 12 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '10',
            'B' => '11',
            'C' => '12',
            'D' => '14'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 36 × 5 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '150',
            'B' => '160',
            'C' => '180',
            'D' => '200'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 720 ÷ 8 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '80',
            'B' => '90',
            'C' => '100',
            'D' => '110'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Nilai tempat angka 7 pada bilangan 5.724 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'satuan',
            'B' => 'puluhan',
            'C' => 'ratusan',
            'D' => 'ribuan'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Nilai tempat angka 8 pada bilangan 8.345 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'satuan',
            'B' => 'puluhan',
            'C' => 'ratusan',
            'D' => 'ribuan'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'D',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Bentuk panjang dari 4.582 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '4.000 + 500 + 80 + 2',
            'B' => '4.000 + 50 + 80 + 2',
            'C' => '400 + 500 + 80 + 2',
            'D' => '4.000 + 500 + 8 + 2'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'A',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Bilangan terbesar di antara bilangan berikut adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '2.345',
            'B' => '2.543',
            'C' => '2.435',
            'D' => '2.354'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Bilangan terkecil di antara bilangan berikut adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '1.245',
            'B' => '1.425',
            'C' => '1.254',
            'D' => '1.524'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'A',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 2.500 + 1.750 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '3.250',
            'B' => '4.000',
            'C' => '4.250',
            'D' => '4.500'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 5.000 - 2.375 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '2.525',
            'B' => '2.625',
            'C' => '2.725',
            'D' => '2.825'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah bus membawa 45 penumpang. Di halte pertama turun 12 orang. Jumlah penumpang yang tersisa adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '23 orang',
            'B' => '30 orang',
            'C' => '33 orang',
            'D' => '35 orang'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Ibu membeli 4 bungkus kue. Setiap bungkus berisi 15 kue. Jumlah seluruh kue adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '45',
            'B' => '50',
            'C' => '60',
            'D' => '75'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Pak Budi memiliki 96 telur dan memasukkannya ke dalam 8 keranjang sama banyak. Setiap keranjang berisi .... telur.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '10',
            'B' => '12',
            'C' => '14',
            'D' => '16'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah persegi memiliki panjang sisi 9 cm. Luas persegi tersebut adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '18 cm²',
            'B' => '36 cm²',
            'C' => '72 cm²',
            'D' => '81 cm²'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'D',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah persegi panjang memiliki panjang 12 cm dan lebar 6 cm. Kelilingnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '18 cm',
            'B' => '24 cm',
            'C' => '36 cm',
            'D' => '72 cm'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah segitiga memiliki alas 14 cm dan tinggi 6 cm. Luasnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '28 cm²',
            'B' => '36 cm²',
            'C' => '42 cm²',
            'D' => '84 cm²'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah bak mandi berisi 50 liter air. Kemudian ditambah 25 liter air. Jumlah air sekarang adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '65 liter',
            'B' => '70 liter',
            'C' => '75 liter',
            'D' => '80 liter'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah tangki berisi 100 liter air. Digunakan 35 liter. Sisa air adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '55 liter',
            'B' => '60 liter',
            'C' => '65 liter',
            'D' => '75 liter'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah pita panjangnya 2 meter. Pita tersebut dipotong menjadi 4 bagian sama panjang. Panjang setiap bagian adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '25 cm',
            'B' => '40 cm',
            'C' => '50 cm',
            'D' => '75 cm'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah persegi memiliki sisi 12 cm. Keliling persegi tersebut adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '24 cm',
            'B' => '36 cm',
            'C' => '48 cm',
            'D' => '144 cm'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah persegi panjang memiliki panjang 15 cm dan lebar 8 cm. Luasnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '46 cm²',
            'B' => '100 cm²',
            'C' => '120 cm²',
            'D' => '150 cm²'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah segitiga memiliki alas 10 cm dan tinggi 8 cm. Luas segitiga tersebut adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '20 cm²',
            'B' => '30 cm²',
            'C' => '40 cm²',
            'D' => '80 cm²'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah persegi panjang memiliki panjang 20 cm dan lebar 5 cm. Kelilingnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '25 cm',
            'B' => '40 cm',
            'C' => '50 cm',
            'D' => '100 cm'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => '1 meter sama dengan .... sentimeter.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '10',
            'B' => '50',
            'C' => '100',
            'D' => '1.000'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => '2 meter sama dengan .... sentimeter.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '100',
            'B' => '150',
            'C' => '200',
            'D' => '250'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => '3 kilogram sama dengan .... gram.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '30',
            'B' => '300',
            'C' => '3.000',
            'D' => '30.000'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => '2 liter sama dengan .... mililiter.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '20',
            'B' => '200',
            'C' => '2.000',
            'D' => '20.000'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => '1 jam sama dengan .... menit.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '30',
            'B' => '45',
            'C' => '60',
            'D' => '100'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => '2 jam sama dengan .... menit.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '60',
            'B' => '90',
            'C' => '120',
            'D' => '180'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => '1 hari sama dengan .... jam.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '12',
            'B' => '18',
            'C' => '24',
            'D' => '36'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => '3 hari sama dengan .... jam.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '48',
            'B' => '60',
            'C' => '72',
            'D' => '96'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah film dimulai pukul 08.00 dan selesai pukul 10.00. Lama film tersebut adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '1 jam',
            'B' => '2 jam',
            'C' => '3 jam',
            'D' => '4 jam'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Budi berangkat sekolah pukul 06.30 dan tiba pukul 07.00. Lama perjalanan Budi adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '15 menit',
            'B' => '20 menit',
            'C' => '30 menit',
            'D' => '45 menit'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah kelas memiliki 30 siswa. Sebanyak 18 siswa menyukai Matematika. Jumlah siswa yang tidak menyukai Matematika adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '10 siswa',
            'B' => '12 siswa',
            'C' => '15 siswa',
            'D' => '18 siswa'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Di sebuah kebun terdapat 25 pohon mangga dan 15 pohon jeruk. Jumlah seluruh pohon adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '30',
            'B' => '35',
            'C' => '40',
            'D' => '45'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah toko mempunyai 80 buku. Terjual 35 buku. Sisa buku adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '35',
            'B' => '40',
            'C' => '45',
            'D' => '50'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Ada 6 rak buku. Setiap rak berisi 20 buku. Jumlah seluruh buku adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '100',
            'B' => '110',
            'C' => '120',
            'D' => '130'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => '96 permen dibagikan sama rata kepada 12 anak. Setiap anak mendapat .... permen.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '6',
            'B' => '8',
            'C' => '10',
            'D' => '12'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah persegi memiliki luas 64 cm². Panjang sisinya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '6 cm',
            'B' => '7 cm',
            'C' => '8 cm',
            'D' => '9 cm'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah persegi panjang memiliki luas 72 cm² dan panjang 12 cm. Lebarnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '4 cm',
            'B' => '6 cm',
            'C' => '8 cm',
            'D' => '10 cm'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah segitiga memiliki luas 30 cm² dan alas 10 cm. Tingginya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '4 cm',
            'B' => '5 cm',
            'C' => '6 cm',
            'D' => '8 cm'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 1.000 + 2.000 + 3.000 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '5.000',
            'B' => '6.000',
            'C' => '7.000',
            'D' => '8.000'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 10.000 - 4.500 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '4.500',
            'B' => '5.000',
            'C' => '5.500',
            'D' => '6.000'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 125 × 8 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '800',
            'B' => '900',
            'C' => '1.000',
            'D' => '1.200'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 900 ÷ 15 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '50',
            'B' => '60',
            'C' => '70',
            'D' => '80'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Jika 5 pensil berharga Rp10.000, maka harga 1 pensil adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'Rp1.000',
            'B' => 'Rp2.000',
            'C' => 'Rp2.500',
            'D' => 'Rp5.000'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Siti memiliki Rp50.000. Ia membeli makanan seharga Rp18.000. Sisa uang Siti adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'Rp22.000',
            'B' => 'Rp28.000',
            'C' => 'Rp32.000',
            'D' => 'Rp38.000'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah kelas memiliki 5 kelompok. Setiap kelompok terdiri dari 6 siswa. Jumlah seluruh siswa adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '25 siswa',
            'B' => '30 siswa',
            'C' => '35 siswa',
            'D' => '40 siswa'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }
        
        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 45 + 38 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '73',
            'B' => '83',
            'C' => '93',
            'D' => '103'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 125 - 48 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '67',
            'B' => '77',
            'C' => '87',
            'D' => '97'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 15 × 7 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '95',
            'B' => '105',
            'C' => '115',
            'D' => '125'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 144 ÷ 12 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '10',
            'B' => '11',
            'C' => '12',
            'D' => '13'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah persegi memiliki sisi 7 cm. Luasnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '42 cm²',
            'B' => '49 cm²',
            'C' => '56 cm²',
            'D' => '64 cm²'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah persegi panjang memiliki panjang 14 cm dan lebar 6 cm. Luasnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '74 cm²',
            'B' => '84 cm²',
            'C' => '94 cm²',
            'D' => '104 cm²'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah persegi panjang memiliki panjang 10 cm dan lebar 4 cm. Kelilingnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '24 cm',
            'B' => '26 cm',
            'C' => '28 cm',
            'D' => '30 cm'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 1/2 + 1/2 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '1/2',
            'B' => '1',
            'C' => '2',
            'D' => '3/2'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 3/5 + 1/5 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '2/5',
            'B' => '3/5',
            'C' => '4/5',
            'D' => '5/5'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Hasil dari 2/3 - 1/3 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '1/3',
            'B' => '2/3',
            'C' => '3/3',
            'D' => '1/2'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'A',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah toko memberikan diskon 20% dari harga Rp50.000. Besar diskonnya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'Rp5.000',
            'B' => 'Rp10.000',
            'C' => 'Rp15.000',
            'D' => 'Rp20.000'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'B',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Sebuah barang seharga Rp80.000 mendapat diskon 25%. Harga setelah diskon adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'Rp50.000',
            'B' => 'Rp55.000',
            'C' => 'Rp60.000',
            'D' => 'Rp65.000'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'KPK dari 8 dan 12 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '16',
            'B' => '20',
            'C' => '24',
            'D' => '32'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'C',
                'is_active' => true
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'FPB dari 24 dan 36 adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '6',
            'B' => '8',
            'C' => '10',
            'D' => '12'
        ];

        foreach ($options as $key => $option) {
            Answer::create([
                'question_id' => $question->id,
                'option' => $key,
                'answer' => $option,
                'is_correct' => $key == 'D',
                'is_active' => true
            ]);
        }

    }
}