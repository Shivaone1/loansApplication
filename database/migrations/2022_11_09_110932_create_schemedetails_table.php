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
        Schema::create('schemedetails', function (Blueprint $table) {
            $table->ID()->primary();
            $table->string('product_name')->nullable();
            $table->text('product_long_term')->nullable();
            $table->string('product_term')->nullable();
            $table->text('product_mode')->nullable();
            $table->string('product_loan_amount')->nullable();
            $table->text('product_roi')->nullable();
            $table->text('product_emi')->nullable();
            $table->string('product_intrest_type')->nullable();  
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
        Schema::dropIfExists('schemedetails');
    }
};
