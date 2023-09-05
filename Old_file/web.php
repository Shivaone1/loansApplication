<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\dashboardcontroller;
use App\Http\Controllers\admin\customercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::group(["namespace"=>"Admin","prefix"=>"admin","middleware"=>["auth"]], function(){
    Route::get('/',[App\Http\Controllers\admin\dashboardcontroller::class,'index']);
    Route::get('/customer',[customercontroller::class,'customer']);
    Route::post('/customer',[customercontroller::class,'customer']);
    Route::get('/addcustomer',[customercontroller::class,'addcustomer']);
    Route::post('/customercreate',[customercontroller::class,'customercreate']);
    Route::get('/custaddbankdetail',[customercontroller::class,'custaddbankdetail']);
    Route::get('/customer/delete/{id}',[customercontroller::class,'customerdelete']);
    Route::get('/customer/{id}',[customercontroller::class,'customerview']);
    Route::get('/customer/edit/{id}',[customercontroller::class,'customeredit']);
    Route::post('/customerupdate/{id}',[customercontroller::class,'customerupdate']);
    Route::get('/deletedcustomer',[customercontroller::class,'deletedcustomer']);
    Route::get('/deletedcustomer/restore/{id}',[customercontroller::class,'restorecustomer']);
    Route::get('/deletedcustomer/pdelete/{id}',[customercontroller::class,'pdeletecustomer']);
    Route::get('/customerold',[customercontroller::class,'oldcustomer']);
    Route::get('/page2',[App\Http\Controllers\admin\page2controller::class,'page2']);
    Route::get('/page2add',[App\Http\Controllers\admin\page2controller::class,'page2add']);
    Route::post('/page2/store',[App\Http\Controllers\admin\page2controller::class,'page2store']);
    Route::get('/page2/delete/{id}',[App\Http\Controllers\admin\page2controller::class,'page2delete']);
    Route::get('/services',[App\Http\Controllers\admin\servicescontroller::class,'services']);
    Route::get('/addservices',[App\Http\Controllers\admin\servicescontroller::class,'servicesaddform']);
    Route::POST('/services/create',[App\Http\Controllers\admin\servicescontroller::class,'servicescreate']);
    Route::get('/services/delete/{id}',[App\Http\Controllers\admin\servicescontroller::class,'deleteservices']);
    Route::get('/services/edit/{id}',[App\Http\Controllers\admin\servicescontroller::class,'editservices']);
    Route::post('/services/update/{id}',[App\Http\Controllers\admin\servicescontroller::class,'servicesupdate']);
    Route::get('/page5',[App\Http\Controllers\admin\dashboardcontroller::class,'page5']);
    Route::POST('/page5',[App\Http\Controllers\admin\dashboardcontroller::class,'createdata']);
    Route::POST('/page5view',[App\Http\Controllers\admin\dashboardcontroller::class,'page5store']);
    Route::get('/page5view',[App\Http\Controllers\admin\dashboardcontroller::class,'page5view']);
    Route::get('/page5view/{id}',[dashboardcontroller::class,'page5viewdelete']);
    
    Route::get('/approval',[App\Http\Controllers\admin\approvalcontroller::class,'approval']);
    Route::post('/approval/approved',[App\Http\Controllers\admin\approvalcontroller::class,'approved']);
    Route::post('/approval/notapproval',[App\Http\Controllers\admin\approvalcontroller::class,'notapproval']);
    Route::get('/customer-joining-approval',[App\Http\Controllers\admin\customerjoiningapprovalcontroller::class,'custjoinapproal']);
    Route::get('/emi-approval',[App\Http\Controllers\admin\emiapprovalcontroller::class,'emiapproval']);
    Route::get('/non-emi-approval',[App\Http\Controllers\admin\nonemiapprovalcontroller::class,'nonemiapproval']);
    Route::get('/payment-voucher-approval',[App\Http\Controllers\admin\paymentvoucherapprovalcontroller::class,'paymentvoucherapproval']);
   
    Route::get('/loan-master',[App\Http\Controllers\admin\loanmastercontroller::class,'loanmaster']);
    Route::get('/loan-interest-master',[App\Http\Controllers\admin\loaninterestmastercontroller::class,'loaninterestmaster']);
    Route::get('/gold-loan-master',[App\Http\Controllers\admin\goldloanmastercontroller::class,'goldloanmaster']);
    Route::get('/loan-requisition',[App\Http\Controllers\admin\loanrequisitioncontroller::class,'loanrequisition']);
    Route::get('/gold-loan-requisition',[App\Http\Controllers\admin\goldloanrequisitioncontroller::class,'goldloanrequisition']);
    Route::get('/loan-topup',[App\Http\Controllers\admin\loantopupcontroller::class,'loantopup']);
    Route::get('/loan-approval',[App\Http\Controllers\admin\loanapprovalcontroller::class,'loanapproval']);
    Route::get('/loan-payment',[App\Http\Controllers\admin\loanpaymentcontroller::class,'loanpayment']);
    Route::get('/loan-re-payment-advance',[App\Http\Controllers\admin\loanrepaymentadvancecontroller::class,'loanrepaymentadvance']);
    Route::get('/loan-re-payment',[App\Http\Controllers\admin\loanrepaymentcontroller::class,'loanrepayment']);
    Route::get('/loan-report',[App\Http\Controllers\admin\loanreportcontroller::class,'loanreport']);
    Route::get('/loan-search',[App\Http\Controllers\admin\loansearchcontroller::class,'loansearch']);
    Route::get('/loan-document-print',[App\Http\Controllers\admin\loandocumentprintcontroller::class,'loandocumentprint']);
    Route::get('/loan-topup-approval',[App\Http\Controllers\admin\loantopupapprovalcontroller::class,'loantopupapproval']);
    Route::get('/loan-account-status',[App\Http\Controllers\admin\loanaccountstatuscontroller::class,'loanaccountstatus']);

    Route::get('/financial-year-master',[App\Http\Controllers\admin\financialyearmastercontroller::class,'financialyearmaster']);
    Route::get('/account-group-master',[App\Http\Controllers\admin\accountgroupmastercontroller::class,'accountgroupmaster']);
    Route::get('/account-ledger-master',[App\Http\Controllers\admin\accountledgermastercontroller::class,'accountledgermaster']);
    Route::get('/bank-account-master',[App\Http\Controllers\admin\bankaccountmastercontroller::class,'bankaccountmaster']);
    Route::get('/payment-voucher-entry',[App\Http\Controllers\admin\paymentvoucherentrycontroller::class,'paymentvoucherentry']);
    Route::get('/receive-voucher-entry',[App\Http\Controllers\admin\receivevoucherentrycontroller::class,'receivevoucherentry']);
    Route::get('/journal-voucher-entry',[App\Http\Controllers\admin\journalvoucherentrycontroller::class,'journalvoucherentry']);
    Route::get('/contra-voucher-entry',[App\Http\Controllers\admin\contravoucherentrycontroller::class,'contravoucherentry']);
    Route::get('/bank-deposit-entry',[App\Http\Controllers\admin\bankdepositentrycontroller::class,'bankdepositentry']);
    Route::get('/bank-withdrawal-entry',[App\Http\Controllers\admin\bankwithdrawalentrycontroller::class,'bankwithdrawalentry']);
    Route::get('/fund-transfer',[App\Http\Controllers\admin\fundtransfercontroller::class,'fundtransfer']);
    Route::get('/fund-receive',[App\Http\Controllers\admin\fundreceivecontroller::class,'fundreceive']);
    Route::get('/cash-book',[App\Http\Controllers\admin\cashbookcontroller::class,'cashbook']);
    Route::get('/day-book',[App\Http\Controllers\admin\daybookcontroller::class,'daybook']);
    Route::get('/bank-book',[App\Http\Controllers\admin\bankbookcontroller::class,'bankbook']);
    Route::get('/journal-entry-report',[App\Http\Controllers\admin\journalentryreportcontroller::class,'journal-entry-report']);
    Route::get('/ledger-report',[App\Http\Controllers\admin\ledgerreportcontroller::class,'ledgerreport']);
    Route::get('/profit-and-loss',[App\Http\Controllers\admin\profitandlosscontroller::class,'profitandloss']);
    Route::get('/balance-sheet-fyear',[App\Http\Controllers\admin\balancesheetfyearcontroller::class,'balancesheetfyear']);
    Route::get('/user-activity-report',[App\Http\Controllers\admin\useractivityreportcontroller::class,'useractivityreport']);
    Route::get('/trial-balance-fyear',[App\Http\Controllers\admin\trialbalancefyearcontroller::class,'trialbalancefyear']);

    Route::get('/loan',[App\Http\Controllers\admin\loancontroller::class,'loan']);
    Route::post('/loan/loanpayment',[App\Http\Controllers\admin\loancontroller::class,'loanpayment']);    
    Route::get('/lrepayment',[App\Http\Controllers\admin\lrepaymentcontroller::class,'lrepayment']);
    Route::get('/account',[App\Http\Controllers\admin\accountcontroller::class,'account']);
    Route::get('/master',[App\Http\Controllers\admin\mastercontroller::class,'master']);   
     
    // Route::get('api-aadharverify',[App\Http\Controllers\api\aadharauthcontroller::class,'aadharverify']);
    
    Route::get('/profile',[App\Http\Controllers\admin\dashboardcontroller::class,'profile']);
    Route::get('/settings',[App\Http\Controllers\admin\dashboardcontroller::class,'settings']);
    Route::get('/test',[App\Http\Controllers\admin\testcontroller::class,'test']);
});

