<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Menampilkan semua jawaban
     */
    public function index()
    {
        $answers = Answer::with('question')->get();

        return view('answers.index', compact('answers'));
    }


    /**
     * Form tambah jawaban
     */
    public function create()
    {
        $questions = Question::all();

        return view('answers.create', compact('questions'));
    }


    /**
     * Simpan jawaban baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'question_id' => 'required',
            'text' => 'required',
            'is_correct' => 'required'
        ]);

        Answer::create([
            'question_id' => $request->question_id,
            'text' => $request->text,
            'is_correct' => $request->is_correct,
            'is_active' => true
        ]);

        return redirect()
            ->route('answers.index')
            ->with('success', 'Jawaban berhasil ditambahkan');
    }


    /**
     * Form edit jawaban
     */
    public function edit(Answer $answer)
    {
        $questions = Question::all();

        return view('answers.edit', compact('answer', 'questions'));
    }


    /**
     * Update jawaban
     */
    public function update(Request $request, Answer $answer)
    {
        $request->validate([
            'question_id' => 'required',
            'text' => 'required',
            'is_correct' => 'required'
        ]);

        $answer->update([
            'question_id' => $request->question_id,
            'text' => $request->text,
            'is_correct' => $request->is_correct,
        ]);

        return redirect()
            ->route('answers.index')
            ->with('success', 'Jawaban berhasil diperbarui');
    }


    /**
     * Hapus jawaban
     */
    public function destroy(Answer $answer)
    {
        $answer->delete();

        return redirect()
            ->route('answers.index')
            ->with('success', 'Jawaban berhasil dihapus');
    }
}