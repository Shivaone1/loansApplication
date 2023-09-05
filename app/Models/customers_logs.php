<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers_logs extends Model
{
    use HasFactory;
    public $fillable=[
        'cust_id',
        'cust_status',
        'cust_title',
        'cust_fname',
        'cust_mname',
        'cust_lname',
        'gardian_title',
        'gardian_title',
        'gardian_fname',
        'gardian_mname',
        'gardian_lname',
        'cust_email_address',
        'cust_mobile',
        'cust_profile_pic',
        'cust_signature_pic',
        'cust_gender',
        'cust_date_of_birth',
        'cust_aadharno',
        'cust_document_aadhar',
        'cust_document_pan',
        'cust_document_bankdt',
        'cust_panno',
        'current_address_detail',
        'current_address_city',
        'current_address_pincode',
        'permanent_address_detail',
        'permanent_address_city',
        'permanent_address_pincode',
        'cust_account_number',
        'cust_bank_holder_name',
        'cust_bank_ifsc_code',
        'cust_bank_branch_code',
        'cust_bank_branche_name',
        'cust_bank_address',
        
    ];
}
