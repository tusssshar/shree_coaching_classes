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
        Schema::create('v1_student_general_info', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('first_name', 100); 
            $table->string('middle_name', 100);     
            $table->string('last_name', 100); 
            $table->date('dob');  
            $table->integer('age'); 
            $table->string('fmobile',10);     
            $table->string('mmobile',10);  
            $table->smallInteger('standdard'); 
            $table->smallInteger('medium'); 
            $table->smallInteger('board'); 
            $table->smallInteger('gender'); 
            $table->string('schoolname',200); 
            $table->text('address'); 
            $table->boolean('status')->default(1);  // 1 = Active, 0 = Inactive
            $table->timestamps();
        });

        Schema::create('v1_student_payment_info', function (Blueprint $table) {
            $table->id();

            $table->foreignId('student_id')->constrained('v1_student_general_info');

            $table->decimal('total_fees', 10, 2);
            $table->decimal('paid_amount', 10, 2)->default(0);

            $table->smallInteger('mode_of_payment'); // ex: 1=cash,2=upi,3=card
            $table->smallInteger('type_of_payment'); // ex: 1=full,2=installment

            $table->boolean('status')->default(1);
            $table->timestamps();
        });

        Schema::create('v1_student_document_info', function (Blueprint $table) {
            $table->id();

            $table->foreignId('student_id')->constrained('v1_student_general_info');

            $table->string('student_photo')->nullable();
            $table->string('government_identity')->nullable();
            $table->string('last_year_marksheet')->nullable();

            $table->boolean('status')->default(1);
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
