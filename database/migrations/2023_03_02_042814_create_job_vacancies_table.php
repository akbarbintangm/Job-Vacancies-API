<?php

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_vacancies', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->uuid('uuid')->primary();
            $table->string('name');
            $table->text('description');
            $table->string('degree');
            $table->date('date_open');
            $table->date('date_close');
            $table->bigInteger('quota');
            $table->integer('status');
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();
        });

        // DB::statement('ALTER TABLE job_vacancies ALTER COLUMN uuid SET DEFAULT uuid_generate_v4()');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_vacancies');
    }
};
