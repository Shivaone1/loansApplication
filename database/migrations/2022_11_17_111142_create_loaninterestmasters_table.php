<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaninterestmasters', function (Blueprint $table) {
            $table->ID()->primary();
            $table->string('month_plan')->nullable();
            $table->string('month_intrest')->nullable();
            $table->string('month_overdue_penalty_intrest')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaninterestmasters');
    }
};
