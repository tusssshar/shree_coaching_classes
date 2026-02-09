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
        Schema::create('v1_scc_boards', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('board_name', 50);          // SSC,CBSE,etc
            $table->unsignedTinyInteger('order_by')->default(0);
            $table->boolean('status')->default(1);  // 1 = Active, 0 = Inactive
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('v1_scc_boards');
    }
};
