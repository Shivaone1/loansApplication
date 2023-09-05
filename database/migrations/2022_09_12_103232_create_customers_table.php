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
        Schema::create('customers', function (Blueprint $table) {
            $table->ID()->primary();
            $table->string('cust_id')->nullable();
            $table->string('cust_status')->nullable();
            $table->string('cust_title');
            $table->string('cust_fname');
            $table->string('cust_mname');
            $table->string('cust_lname');
            $table->string('gardian_title');
            $table->string('gardian_fname');
            $table->string('gardian_mname');
            $table->string('gardian_lname');
            $table->string('cust_email_address');
            $table->string('cust_mobile');   
            $table->string('cust_profile_pic')->nullable();
            $table->string('cust_signature_pic')->nullable();
            $table->string('cust_gender');
            $table->string('cust_date_of_birth');
            $table->string('cust_aadharno');
            $table->string('cust_panno')->nullable();
            $table->string('current_address_detail');
            $table->string('current_address_city');
            $table->string('current_address_pincode');
            $table->string('permanent_address_detail');
            $table->string('permanent_address_city');
            $table->string('permanent_address_pincode');
            $table->text('cust_account_number')->nullable();
            $table->text('cust_bank_holder_name')->nullable();
            $table->text('cust_bank_ifsc_code')->nullable();
            $table->string('cust_bank_branch_code')->nullable();
            $table->string('cust_bank_branche_name')->nullable();
            $table->string('cust_bank_address')->nullable();
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
        Schema::dropIfExists('customers');
    }
};
