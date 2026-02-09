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
        Schema::rename('v1_student_general_info', 'v1_scc_student_general_info');
        Schema::rename('v1_student_payment_info', 'v1_scc_student_payment_info');
        Schema::rename('v1_student_document_info', 'v1_scc_student_document_info');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
