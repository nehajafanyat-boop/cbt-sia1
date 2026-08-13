<?php

use App\Models\Subject;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();

            // Foreign Key ke tabel subjects
            $table->foreignIdFor(Subject::class)
                ->constrained()
                ->cascadeOnDelete();

            // Isi soal
            $table->longText('payload');

            // Nilai soal
            $table->integer('score')->default(1);

            // Keterangan (opsional)
            $table->text('description')->nullable();

            // Status aktif
            $table->boolean('is_active')->default(true);

            // Soft Delete
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};