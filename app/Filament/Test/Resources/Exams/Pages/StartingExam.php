<?php

namespace App\Filament\Test\Resources\Exams\Pages;

use App\Filament\Test\Resources\Exams\ExamResource;
use App\Models\Exam;
use App\Models\ExamResult;
use App\Models\ExamResultAnswer;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\Auth;

class StartingExam extends Page
{
    protected static string $resource = ExamResource::class;

    protected string $view = 'filament.test.resources.exams.pages.starting-exam';

    public array $collections = [];

    public array $jawaban = [];

    public Exam $exam;

    public function mount(Exam $exam)
    {
        $this->exam = $exam;

        $pelajarans = null;

        if ($exam) {
            $pelajarans = $exam->subjects;
        }

        foreach ($pelajarans as $mapel) {
            $this->collections[] = [
                'id'    => $mapel->id,
                'name'  => $mapel->name,
                'soals' => $mapel
                    ->questions()
                    ->where('is_active', true)
                    ->with([
                        'answers' => fn ($query) => $query->orderBy('id'),
                    ])
                    ->orderBy('id')
                    ->limit($mapel->pivot->qty)
                    ->get()
                    ->toArray(),
            ];
        }
    }

    public function submit()
    {
        $user = Auth::user();

        $student = $user->student;

        if (! $student) {
            Notification::make()
                ->title('Data siswa tidak ditemukan.')
                ->danger()
                ->send();

            return;
        }

        $exam = $this->exam;

        $correct = 0;
        $wrong = 0;

        $examResult = ExamResult::create([
            'student_id' => $student->id,
            'exam_id' => $exam->id,
            'score' => 0,
            'correct' => 0,
            'wrong' => 0,
            'started_at' => now(),
            'finished_at' => now(),
        ]);

        foreach ($this->collections as $pelajaran) {
            foreach ($pelajaran['soals'] as $pertanyaan) {

                $questionId = $pertanyaan['id'];
                $answerId = $this->jawaban[$questionId] ?? null;

                $answer = null;

                if ($answerId) {
                    $answer = collect($pertanyaan['answers'])
                        ->firstWhere('id', (int) $answerId);
                }

                $isCorrect = $answer && $answer['is_correct'];

                if ($isCorrect) {
                    $correct++;
                } else {
                    $wrong++;
                }

                ExamResultAnswer::create([
                    'exam_result_id' => $examResult->id,
                    'question_id' => $questionId,
                    'answer_id' => $answerId,
                    'is_correct' => $isCorrect,
                ]);
            }
        }

        $totalQuestions = $correct + $wrong;

        $score = $totalQuestions > 0
            ? ($correct / $totalQuestions) * 100
            : 0;

        $examResult->update([
            'correct' => $correct,
            'wrong' => $wrong,
            'score' => $score,
        ]);

        Notification::make()
            ->title('Ujian selesai.')
            ->body("Skor kamu: {$score}")
            ->success()
            ->send();

        return redirect()->route('filament.test.resources.exams.index');
    }
}