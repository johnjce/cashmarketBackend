<?php

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

Route::get('/', function(){
    return view('welcome');
});

Auth::routes();


    //basicamente para controlar los perfiles que pueden acceder desde el controller
//Auth::user()->authorizeRoles(['admin']);


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/customerAdd', 'CustomerController@index')->name('CustomerForm');
    Route::post('/customerAdd', 'CustomerController@save')->name('CustomerAdd');
    Route::get('/customers', 'CustomerController@seeCustomers')->name('CustomerList');
    Route::post('/customerSearch', 'CustomerController@customerSearch')->name('CustomerSearch');

    Route::get('/newPurchase', 'PurchaseController@newPurchase')->name('Purchase');
    Route::post('/savePurchase', 'PurchaseController@purchaseAdd')->name('SavePurchase');
    Route::post('/purchaseAgreementData', 'PurchaseController@purchaseAgreementData')->name('purchaseAgreementData');
    Route::get('/PurchaseList', 'PurchaseController@purchaseList')->name('PurchaseList');

    
    Route::get('/newDownPayment', 'DownPaymentController@newDownPayment')->name('DownPayment');
    Route::post('/saveDownPayment', 'DownPaymentController@downPaymentAdd')->name('SaveDownPayment');
    Route::get('/DownPaymentList', 'DownPaymentController@downPaymentList')->name('DownPaymentList');

    Route::post('/updateSignature', 'HomeController@updateSignature')->name('updateSignature');

    Route::get('/newPawn', 'PawnController@newPawn')->name('Pawn');
    Route::post('/savePawn', 'PawnController@pawnAdd')->name('SavePawn');
    Route::get('/PawnList', 'PawnController@pawnList')->name('PawnList');

});