<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Question;
use App\Models\Answer;

class IndonesianQuestionSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('name', 'Bahasa Indonesia')->first();

        if (!$subject) {
            $subject = Subject::create([
                'name' => 'Bahasa Indonesia'
            ]);
        }

        $question = Question::create([
            'subject_id' => $subject->id,
            'payload' => 'Antonim dari kata "besar" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tinggi',
            'B' => 'kecil',
            'C' => 'panjang',
            'D' => 'luas'
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
            'payload' => 'Kata baku dari kata "ijin" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'izin',
            'B' => 'ijin',
            'C' => 'izhin',
            'D' => 'ijinan'
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
            'payload' => 'Kalimat yang berisi perintah disebut kalimat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tanya',
            'B' => 'perintah',
            'C' => 'berita',
            'D' => 'seru'
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
            'payload' => 'Ide utama dalam sebuah paragraf disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'kalimat penjelas',
            'B' => 'judul',
            'C' => 'gagasan pokok',
            'D' => 'kata sambung'
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
            'payload' => 'Lawan kata dari "rajin" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'malas',
            'B' => 'cepat',
            'C' => 'pintar',
            'D' => 'baik'
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
            'payload' => 'Kata yang digunakan untuk menggantikan nama orang atau benda disebut kata ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'kerja',
            'B' => 'sifat',
            'C' => 'ganti',
            'D' => 'bilangan'
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
            'payload' => 'Kalimat yang berisi informasi atau berita disebut kalimat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tanya',
            'B' => 'berita',
            'C' => 'perintah',
            'D' => 'larangan'
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
            'payload' => 'Cerita yang mengisahkan kehidupan binatang yang berperilaku seperti manusia disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'dongeng',
            'B' => 'fabel',
            'C' => 'puisi',
            'D' => 'pantun'
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
            'payload' => 'Pantun biasanya terdiri dari .... baris dalam satu bait.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '2',
            'B' => '3',
            'C' => '4',
            'D' => '5'
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
            'payload' => 'Bagian awal dalam sebuah cerita yang berisi pengenalan tokoh disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'orientasi',
            'B' => 'konflik',
            'C' => 'resolusi',
            'D' => 'amanat'
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
            'payload' => 'Pesan moral yang ingin disampaikan penulis kepada pembaca disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tema',
            'B' => 'amanat',
            'C' => 'latar',
            'D' => 'tokoh'
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
            'payload' => 'Kata yang menunjukkan suatu tindakan atau pekerjaan disebut kata ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'kata benda',
            'B' => 'kata sifat',
            'C' => 'kata kerja',
            'D' => 'kata bilangan'
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
            'payload' => 'Tempat terjadinya suatu peristiwa dalam cerita disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tema',
            'B' => 'alur',
            'C' => 'latar tempat',
            'D' => 'amanat'
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
            'payload' => 'Kalimat yang digunakan untuk menanyakan sesuatu disebut kalimat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'berita',
            'B' => 'tanya',
            'C' => 'perintah',
            'D' => 'seruan'
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
            'payload' => 'Lawan kata dari "panjang" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tinggi',
            'B' => 'pendek',
            'C' => 'besar',
            'D' => 'lebar'
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
            'payload' => 'Kalimat yang digunakan untuk menyampaikan perasaan kagum, marah, atau terkejut disebut kalimat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'kalimat tanya',
            'B' => 'kalimat berita',
            'C' => 'kalimat perintah',
            'D' => 'kalimat seru'
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
            'payload' => 'Orang yang melakukan atau mengalami suatu peristiwa dalam cerita disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tokoh',
            'B' => 'latar',
            'C' => 'tema',
            'D' => 'amanat'
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
            'payload' => 'Urutan peristiwa dalam sebuah cerita disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tema',
            'B' => 'alur',
            'C' => 'tokoh',
            'D' => 'latar'
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
            'payload' => 'Persamaan kata dari "pandai" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'malas',
            'B' => 'bodoh',
            'C' => 'cerdas',
            'D' => 'lambat'
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
            'payload' => 'Kalimat yang menyatakan suatu fakta atau informasi disebut kalimat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'kalimat berita',
            'B' => 'kalimat tanya',
            'C' => 'kalimat perintah',
            'D' => 'kalimat seru'
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
            'payload' => 'Kata yang memiliki arti sama atau hampir sama dengan kata lain disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'antonim',
            'B' => 'sinonim',
            'C' => 'homonim',
            'D' => 'akronim'
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
            'payload' => 'Kata yang memiliki arti berlawanan dengan kata lain disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'sinonim',
            'B' => 'antonim',
            'C' => 'homonim',
            'D' => 'kata baku'
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
            'payload' => 'Kalimat yang digunakan untuk memberikan larangan disebut kalimat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tanya',
            'B' => 'berita',
            'C' => 'larangan',
            'D' => 'seru'
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
            'payload' => 'Judul yang sesuai dengan isi sebuah bacaan disebut judul yang ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'sesuai',
            'B' => 'panjang',
            'C' => 'sulit',
            'D' => 'pendek'
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
            'payload' => 'Kalimat utama biasanya berisi .... sebuah paragraf.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'gagasan pokok',
            'B' => 'contoh',
            'C' => 'tambahan',
            'D' => 'penutup'
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
            'payload' => 'Kalimat penjelas berfungsi untuk .... kalimat utama.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'menghapus',
            'B' => 'menjelaskan',
            'C' => 'mengubah',
            'D' => 'menggantikan'
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
            'payload' => 'Kegiatan membaca untuk mengetahui isi bacaan secara keseluruhan disebut membaca ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'sekilas',
            'B' => 'nyaring',
            'C' => 'intensif',
            'D' => 'dalam hati'
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
            'payload' => 'Orang yang memberikan informasi dalam sebuah wawancara disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'pewawancara',
            'B' => 'narasumber',
            'C' => 'pendengar',
            'D' => 'pembaca'
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
            'payload' => 'Orang yang mengajukan pertanyaan dalam wawancara disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'narasumber',
            'B' => 'pewawancara',
            'C' => 'pendengar',
            'D' => 'pembaca'
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
            'payload' => 'Kegiatan tanya jawab antara pewawancara dan narasumber disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'diskusi',
            'B' => 'wawancara',
            'C' => 'pidato',
            'D' => 'debat'
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
            'payload' => 'Puisi adalah karya sastra yang menggunakan bahasa yang ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'biasa',
            'B' => 'indah',
            'C' => 'sulit',
            'D' => 'panjang'
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
            'payload' => 'Orang yang menulis puisi disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'penyair',
            'B' => 'pelukis',
            'C' => 'wartawan',
            'D' => 'pembaca'
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
            'payload' => 'Rima dalam pantun biasanya berpola ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'a-a-a-a',
            'B' => 'a-b-a-b',
            'C' => 'a-a-b-b',
            'D' => 'a-b-b-a'
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
            'payload' => 'Dua baris pertama dalam pantun disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'isi',
            'B' => 'sampiran',
            'C' => 'amanat',
            'D' => 'judul'
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
            'payload' => 'Dua baris terakhir dalam pantun disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'sampiran',
            'B' => 'isi',
            'C' => 'judul',
            'D' => 'tema'
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
            'payload' => 'Cerita yang diwariskan secara turun-temurun dan dianggap benar-benar terjadi disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'legenda',
            'B' => 'puisi',
            'C' => 'pantun',
            'D' => 'berita'
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
            'payload' => 'Cerita yang tokohnya berupa binatang dan memiliki sifat seperti manusia disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'fabel',
            'B' => 'legenda',
            'C' => 'biografi',
            'D' => 'berita'
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
            'payload' => 'Riwayat hidup seseorang yang ditulis oleh orang lain disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'autobiografi',
            'B' => 'biografi',
            'C' => 'dongeng',
            'D' => 'fabel'
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
            'payload' => 'Riwayat hidup yang ditulis oleh diri sendiri disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'biografi',
            'B' => 'autobiografi',
            'C' => 'legenda',
            'D' => 'fabel'
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
            'payload' => 'Kegiatan menyampaikan informasi kepada orang lain secara lisan di depan umum disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'pidato',
            'B' => 'wawancara',
            'C' => 'membaca',
            'D' => 'menulis'
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
            'payload' => 'Orang yang menyampaikan pidato disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'pendengar',
            'B' => 'pembicara',
            'C' => 'penonton',
            'D' => 'pembaca'
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
            'payload' => 'Informasi yang benar-benar terjadi dan dapat dibuktikan disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'opini',
            'B' => 'fakta',
            'C' => 'saran',
            'D' => 'pendapat'
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
            'payload' => 'Pendapat atau pikiran seseorang terhadap suatu hal disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'fakta',
            'B' => 'opini',
            'C' => 'data',
            'D' => 'bukti'
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
            'payload' => 'Surat yang ditujukan kepada teman atau keluarga disebut surat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'resmi',
            'B' => 'dinas',
            'C' => 'pribadi',
            'D' => 'undangan'
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
            'payload' => 'Surat yang digunakan untuk keperluan kedinasan disebut surat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'pribadi',
            'B' => 'resmi',
            'C' => 'keluarga',
            'D' => 'persahabatan'
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
            'payload' => 'Bagian surat yang berisi nama dan alamat orang yang dituju disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'isi surat',
            'B' => 'alamat tujuan',
            'C' => 'salam penutup',
            'D' => 'tanda tangan'
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
            'payload' => 'Kata "membaca" termasuk jenis kata ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'benda',
            'B' => 'kerja',
            'C' => 'sifat',
            'D' => 'bilangan'
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
            'payload' => 'Kata "indah" termasuk jenis kata ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'kata kerja',
            'B' => 'kata benda',
            'C' => 'kata sifat',
            'D' => 'kata bilangan'
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
            'payload' => 'Kata "rumah" termasuk jenis kata ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'kata kerja',
            'B' => 'kata sifat',
            'C' => 'kata benda',
            'D' => 'kata bilangan'
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
            'payload' => 'Kata yang menunjukkan jumlah atau banyaknya sesuatu disebut kata ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'bilangan',
            'B' => 'kerja',
            'C' => 'sifat',
            'D' => 'benda'
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
            'payload' => 'Kata "mereka" termasuk kata ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'kata benda',
            'B' => 'kata ganti',
            'C' => 'kata kerja',
            'D' => 'kata sifat'
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
            'payload' => 'Kalimat yang memiliki satu gagasan utama disebut kalimat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'majemuk',
            'B' => 'tunggal',
            'C' => 'seruan',
            'D' => 'tanya'
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
            'payload' => 'Gabungan dua kalimat atau lebih disebut kalimat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tunggal',
            'B' => 'majemuk',
            'C' => 'berita',
            'D' => 'seru'
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
            'payload' => 'Tanda baca yang digunakan pada akhir kalimat tanya adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '.',
            'B' => ',',
            'C' => '?',
            'D' => '!'
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
            'payload' => 'Tanda baca yang digunakan pada akhir kalimat seru adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => '.',
            'B' => '?',
            'C' => ',',
            'D' => '!'
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
            'payload' => 'Tanda baca yang digunakan untuk memisahkan unsur-unsur dalam suatu perincian adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'titik',
            'B' => 'koma',
            'C' => 'tanya',
            'D' => 'seru'
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
            'payload' => 'Kata baku dari kata "apotik" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'apotik',
            'B' => 'apotek',
            'C' => 'apoteg',
            'D' => 'apoteq'
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
            'payload' => 'Kata baku dari kata "resiko" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'resiko',
            'B' => 'resikho',
            'C' => 'risiko',
            'D' => 'riziko'
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
            'payload' => 'Kata baku dari kata "aktifitas" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'aktifitas',
            'B' => 'aktivitas',
            'C' => 'aktifitaz',
            'D' => 'aktivitaz'
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
            'payload' => 'Kata baku dari kata "nasehat" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'nasehat',
            'B' => 'nasihat',
            'C' => 'nashihat',
            'D' => 'nasiat'
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
            'payload' => 'Kata baku dari kata "jaman" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'jaman',
            'B' => 'zaman',
            'C' => 'dzaman',
            'D' => 'jamman'
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
            'payload' => 'Kata baku dari kata "cuman" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'cuma',
            'B' => 'cuman',
            'C' => 'cumanan',
            'D' => 'cumma'
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
            'payload' => 'Kata baku dari kata "karir" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'karir',
            'B' => 'karier',
            'C' => 'kareer',
            'D' => 'karirh'
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
            'payload' => 'Kata baku dari kata "praktek" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'praktek',
            'B' => 'praktik',
            'C' => 'praktekkan',
            'D' => 'praktiek'
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
            'payload' => 'Kata "cepat" memiliki lawan kata ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'lambat',
            'B' => 'segera',
            'C' => 'gesit',
            'D' => 'sigap'
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
            'payload' => 'Persamaan kata dari "gembira" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'sedih',
            'B' => 'senang',
            'C' => 'marah',
            'D' => 'takut'
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
            'payload' => 'Persamaan kata dari "indah" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'buruk',
            'B' => 'cantik',
            'C' => 'jelek',
            'D' => 'kotor'
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
            'payload' => 'Persamaan kata dari "sulit" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'mudah',
            'B' => 'gampang',
            'C' => 'sukar',
            'D' => 'ringan'
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
            'payload' => 'Lawan kata dari "gelap" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'hitam',
            'B' => 'terang',
            'C' => 'malam',
            'D' => 'redup'
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
            'payload' => 'Lawan kata dari "bersih" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'rapi',
            'B' => 'indah',
            'C' => 'kotor',
            'D' => 'wangi'
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
            'payload' => 'Lawan kata dari "tinggi" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'besar',
            'B' => 'rendah',
            'C' => 'panjang',
            'D' => 'lebar'
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
            'payload' => 'Lawan kata dari "kuat" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'kokoh',
            'B' => 'lemah',
            'C' => 'besar',
            'D' => 'keras'
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
            'payload' => 'Tokoh yang memiliki sifat baik dalam sebuah cerita disebut tokoh ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'antagonis',
            'B' => 'protagonis',
            'C' => 'tambahan',
            'D' => 'pendukung'
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
            'payload' => 'Tokoh yang biasanya menjadi lawan tokoh utama disebut tokoh ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'protagonis',
            'B' => 'antagonis',
            'C' => 'utama',
            'D' => 'tambahan'
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
            'payload' => 'Tempat, waktu, dan suasana dalam sebuah cerita disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tema',
            'B' => 'alur',
            'C' => 'latar',
            'D' => 'amanat'
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
            'payload' => 'Gagasan yang menjadi dasar atau pokok sebuah cerita disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tema',
            'B' => 'tokoh',
            'C' => 'latar',
            'D' => 'alur'
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
            'payload' => 'Bagian cerita yang berisi penyelesaian masalah disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'orientasi',
            'B' => 'konflik',
            'C' => 'resolusi',
            'D' => 'pengenalan'
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
            'payload' => 'Pesan yang ingin disampaikan penulis kepada pembaca dalam sebuah cerita disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tema',
            'B' => 'amanat',
            'C' => 'latar',
            'D' => 'tokoh'
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
            'payload' => 'Urutan peristiwa dalam sebuah cerita disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'alur',
            'B' => 'tema',
            'C' => 'latar',
            'D' => 'amanat'
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
            'payload' => 'Tempat terjadinya suatu peristiwa dalam cerita disebut latar ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'waktu',
            'B' => 'tempat',
            'C' => 'suasana',
            'D' => 'kejadian'
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
            'payload' => 'Keterangan mengenai kapan suatu peristiwa terjadi disebut latar ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tempat',
            'B' => 'suasana',
            'C' => 'waktu',
            'D' => 'tokoh'
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
            'payload' => 'Suasana yang dirasakan dalam sebuah cerita termasuk latar ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tempat',
            'B' => 'waktu',
            'C' => 'suasana',
            'D' => 'kejadian'
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
            'payload' => 'Kegiatan menyampaikan gagasan secara tertulis disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'menulis',
            'B' => 'berbicara',
            'C' => 'mendengar',
            'D' => 'membaca'
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
            'payload' => 'Kegiatan memahami informasi yang terdapat dalam bacaan disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'menulis',
            'B' => 'membaca',
            'C' => 'berbicara',
            'D' => 'menggambar'
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
            'payload' => 'Orang yang membaca berita melalui televisi disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'wartawan',
            'B' => 'pembaca berita',
            'C' => 'narasumber',
            'D' => 'penonton'
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
            'payload' => 'Orang yang mencari dan mengumpulkan berita disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'wartawan',
            'B' => 'pembaca',
            'C' => 'penonton',
            'D' => 'pendengar'
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
            'payload' => 'Berita yang baik harus disampaikan berdasarkan ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'khayalan',
            'B' => 'fakta',
            'C' => 'mimpi',
            'D' => 'dugaan'
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
            'payload' => 'Judul yang tepat untuk cerita tentang menjaga kebersihan lingkungan adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'Lingkungan Bersih dan Sehat',
            'B' => 'Bermain di Rumah',
            'C' => 'Pergi ke Sekolah',
            'D' => 'Liburan Bersama Keluarga'
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
            'payload' => 'Ringkasan dari sebuah bacaan harus memuat .... bacaan.',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'semua kata',
            'B' => 'inti',
            'C' => 'semua kalimat',
            'D' => 'gambar'
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
            'payload' => 'Ringkasan dibuat dengan menggunakan kalimat yang ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'panjang dan berulang',
            'B' => 'singkat dan jelas',
            'C' => 'sulit dipahami',
            'D' => 'tidak beraturan'
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
            'payload' => 'Daftar yang berisi kata-kata beserta maknanya disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'kamus',
            'B' => 'novel',
            'C' => 'majalah',
            'D' => 'surat'
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
            'payload' => 'Tempat untuk mencari arti sebuah kata adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'koran',
            'B' => 'kamus',
            'C' => 'poster',
            'D' => 'majalah'
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
            'payload' => 'Percakapan antara dua orang atau lebih disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'dialog',
            'B' => 'monolog',
            'C' => 'pidato',
            'D' => 'ceramah'
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
            'payload' => 'Percakapan yang dilakukan oleh satu orang disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'dialog',
            'B' => 'monolog',
            'C' => 'wawancara',
            'D' => 'diskusi'
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
            'payload' => 'Kegiatan tanya jawab dengan seseorang untuk memperoleh informasi disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'wawancara',
            'B' => 'pidato',
            'C' => 'membaca',
            'D' => 'menulis'
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
            'payload' => 'Orang yang memberikan informasi dalam kegiatan wawancara disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'pewawancara',
            'B' => 'narasumber',
            'C' => 'pembaca',
            'D' => 'pendengar'
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
            'payload' => 'Orang yang mengajukan pertanyaan dalam wawancara disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'narasumber',
            'B' => 'pewawancara',
            'C' => 'penonton',
            'D' => 'pembaca'
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
            'payload' => 'Pertanyaan wawancara sebaiknya menggunakan bahasa yang ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'sopan dan jelas',
            'B' => 'kasar',
            'C' => 'membingungkan',
            'D' => 'tidak teratur'
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
            'payload' => 'Pantun memiliki dua bagian, yaitu ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'judul dan isi',
            'B' => 'sampiran dan isi',
            'C' => 'awal dan akhir',
            'D' => 'tema dan amanat'
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
            'payload' => 'Baris pertama dan kedua dalam pantun disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'isi',
            'B' => 'sampiran',
            'C' => 'amanat',
            'D' => 'judul'
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
            'payload' => 'Baris ketiga dan keempat dalam pantun disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'sampiran',
            'B' => 'isi',
            'C' => 'judul',
            'D' => 'pembuka'
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
            'payload' => 'Puisi yang terdiri dari dua baris dalam setiap bait disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'pantun',
            'B' => 'gurindam',
            'C' => 'syair',
            'D' => 'cerpen'
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
            'payload' => 'Puisi lama yang setiap baitnya terdiri dari empat baris dan bersajak a-a-a-a disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'pantun',
            'B' => 'syair',
            'C' => 'gurindam',
            'D' => 'mantra'
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
            'payload' => 'Cerita pendek biasanya disingkat menjadi ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'cerita',
            'B' => 'cerpen',
            'C' => 'cepen',
            'D' => 'cerita pendek'
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
            'payload' => 'Cerita yang dibuat berdasarkan khayalan penulis disebut cerita ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'fiksi',
            'B' => 'nonfiksi',
            'C' => 'ilmiah',
            'D' => 'berita'
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
            'payload' => 'Cerita yang berdasarkan fakta atau kejadian nyata disebut cerita ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'fiksi',
            'B' => 'nonfiksi',
            'C' => 'dongeng',
            'D' => 'fabel'
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
            'payload' => 'Buku yang berisi kisah hidup seseorang yang ditulis oleh orang lain disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'autobiografi',
            'B' => 'biografi',
            'C' => 'cerpen',
            'D' => 'novel'
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
            'payload' => 'Kisah hidup seseorang yang ditulis oleh dirinya sendiri disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'biografi',
            'B' => 'autobiografi',
            'C' => 'cerpen',
            'D' => 'dongeng'
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
            'payload' => 'Slogan biasanya dibuat dengan kalimat yang ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'panjang dan rumit',
            'B' => 'singkat dan menarik',
            'C' => 'sangat panjang',
            'D' => 'sulit dipahami'
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
            'payload' => 'Kalimat singkat yang menarik dan mudah diingat untuk menyampaikan pesan disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'slogan',
            'B' => 'cerpen',
            'C' => 'surat',
            'D' => 'berita'
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
            'payload' => 'Gambar atau tulisan yang ditempel di tempat umum untuk memberikan informasi disebut ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'poster',
            'B' => 'novel',
            'C' => 'cerpen',
            'D' => 'surat'
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
            'payload' => 'Poster yang baik harus menggunakan tulisan yang ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'sulit dibaca',
            'B' => 'jelas dan menarik',
            'C' => 'sangat kecil',
            'D' => 'tidak beraturan'
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
            'payload' => 'Kalimat ajakan biasanya menggunakan kata ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'jangan',
            'B' => 'mari',
            'C' => 'tidak',
            'D' => 'dilarang'
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
            'payload' => 'Kalimat yang berisi larangan biasanya menggunakan kata ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'mari',
            'B' => 'ayo',
            'C' => 'jangan',
            'D' => 'silakan'
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
            'payload' => 'Kalimat "Ayo kita menjaga kebersihan!" termasuk kalimat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tanya',
            'B' => 'berita',
            'C' => 'ajakan',
            'D' => 'larangan'
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
            'payload' => 'Kalimat "Jangan membuang sampah sembarangan!" termasuk kalimat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'ajakan',
            'B' => 'larangan',
            'C' => 'tanya',
            'D' => 'berita'
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
            'payload' => 'Kalimat yang digunakan untuk menanyakan sesuatu disebut kalimat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'berita',
            'B' => 'perintah',
            'C' => 'tanya',
            'D' => 'ajakan'
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
            'payload' => 'Kata tanya yang digunakan untuk menanyakan orang adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'apa',
            'B' => 'siapa',
            'C' => 'kapan',
            'D' => 'di mana'
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
            'payload' => 'Kata tanya yang digunakan untuk menanyakan waktu adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'siapa',
            'B' => 'apa',
            'C' => 'kapan',
            'D' => 'mengapa'
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
            'payload' => 'Kata tanya yang digunakan untuk menanyakan tempat adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'di mana',
            'B' => 'kapan',
            'C' => 'siapa',
            'D' => 'mengapa'
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
            'payload' => 'Kata tanya "mengapa" digunakan untuk menanyakan ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'orang',
            'B' => 'tempat',
            'C' => 'alasan',
            'D' => 'waktu'
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
            'payload' => 'Kata tanya "bagaimana" digunakan untuk menanyakan ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'cara atau keadaan',
            'B' => 'orang',
            'C' => 'tempat',
            'D' => 'waktu'
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
            'payload' => 'Kalimat "Siapa nama gurumu?" menggunakan kata tanya ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'apa',
            'B' => 'siapa',
            'C' => 'kapan',
            'D' => 'bagaimana'
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
            'payload' => 'Kalimat "Kapan kamu pergi ke sekolah?" menanyakan ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tempat',
            'B' => 'orang',
            'C' => 'waktu',
            'D' => 'alasan'
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
            'payload' => 'Kalimat "Di mana kamu tinggal?" menanyakan ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'waktu',
            'B' => 'tempat',
            'C' => 'orang',
            'D' => 'alasan'
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
            'payload' => 'Kalimat "Mengapa kamu terlambat?" menanyakan ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tempat',
            'B' => 'waktu',
            'C' => 'alasan',
            'D' => 'orang'
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
            'payload' => 'Kata "dan" digunakan untuk menghubungkan ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'pilihan',
            'B' => 'dua unsur atau lebih',
            'C' => 'pertanyaan',
            'D' => 'kalimat perintah'
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
            'payload' => 'Kata penghubung yang menyatakan pilihan adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'dan',
            'B' => 'tetapi',
            'C' => 'atau',
            'D' => 'karena'
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
            'payload' => 'Kata penghubung yang menyatakan pertentangan adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'dan',
            'B' => 'atau',
            'C' => 'tetapi',
            'D' => 'karena'
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
            'payload' => 'Kata penghubung "karena" biasanya digunakan untuk menyatakan ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'sebab',
            'B' => 'pilihan',
            'C' => 'pertentangan',
            'D' => 'tambahan'
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
            'payload' => 'Kata penghubung "sehingga" menyatakan hubungan ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'sebab',
            'B' => 'akibat',
            'C' => 'pilihan',
            'D' => 'pertentangan'
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
            'payload' => 'Kalimat "Rina belajar dengan rajin sehingga mendapat nilai bagus." menggunakan kata penghubung ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'dan',
            'B' => 'atau',
            'C' => 'sehingga',
            'D' => 'tetapi'
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
            'payload' => 'Kata "sangat" dalam kalimat "Bunga itu sangat indah" berfungsi sebagai kata ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'penegas',
            'B' => 'ganti',
            'C' => 'bilangan',
            'D' => 'benda'
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
            'payload' => 'Kalimat yang menggunakan kata-kata sesuai aturan bahasa disebut kalimat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'efektif',
            'B' => 'panjang',
            'C' => 'rumit',
            'D' => 'tidak baku'
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
            'payload' => 'Ciri kalimat efektif adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'bertele-tele',
            'B' => 'jelas dan mudah dipahami',
            'C' => 'menggunakan banyak kata',
            'D' => 'sulit dimengerti'
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
            'payload' => 'Kalimat "Adik sedang membaca buku." termasuk kalimat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tanya',
            'B' => 'berita',
            'C' => 'perintah',
            'D' => 'seruan'
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
            'payload' => 'Kalimat "Tolong tutup pintu itu!" termasuk kalimat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'berita',
            'B' => 'tanya',
            'C' => 'perintah',
            'D' => 'ajakan'
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
            'payload' => 'Kalimat "Wah, indah sekali pemandangan ini!" termasuk kalimat ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'tanya',
            'B' => 'berita',
            'C' => 'perintah',
            'D' => 'seru'
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
            'payload' => 'Kata "berlari" berasal dari kata dasar ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'lari',
            'B' => 'ber',
            'C' => 'lari-lari',
            'D' => 'pelari'
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
            'payload' => 'Kata "pelari" berarti orang yang ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'berjalan',
            'B' => 'berlari',
            'C' => 'berenang',
            'D' => 'melompat'
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
            'payload' => 'Kata dasar dari "makanan" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'makan',
            'B' => 'kan',
            'C' => 'makanan',
            'D' => 'mak'
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
            'payload' => 'Kata dasar dari "pelajaran" adalah ....',
            'score' => 1,
            'is_active' => true
        ]);

        $options = [
            'A' => 'ajar',
            'B' => 'pelajar',
            'C' => 'pelajaran',
            'D' => 'ajaran'
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
    }
}