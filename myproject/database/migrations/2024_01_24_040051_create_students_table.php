<?php

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
        Schema::create('students', function (Blueprint $table) {
            Schema::create('students', function (Blueprint $table) {
                $table->id();//type:bigit,ai,primarykey
                $table->string('name',255);
                $table->char('gender',6);
                $table->string('profile');
                $table->float('Attendant');
                $table->float('Activity');
                $table->float('Exam');
                $table->float('Total');
                $table->float('Average');
                $table->char('grade',1);
                $table->timestamps();//create_at(timmestamp),updated_at(timestamp)
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
