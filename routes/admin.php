<?php

use Illuminate\Support\Facades\Route;


//Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'],
//    function(){
//
//    Route::get('dashboard', "Admin\AdminController@dashboard")->name('dashboard');
//    Route::get('settings', "Admin\AdminController@settings")->name('settings');
//    Route::post('store/settings', "Admin\AdminController@storeSettings")->name('storeSettings');
//    Route::post('store/password', "Admin\AdminController@storePassword")->name('storePassword');
//    Route::get('open/withdraw/{id}', "Admin\AdminController@openWithdraw")->name('openWithdraw');
//    Route::get('close/withdraw/{id}', "Admin\AdminController@closeWithdraw")->name('closeWithdraw');
//    Route::get('suspend/withdraw/{id}', "Admin\AdminController@suspendWithdraw")->name('suspendWithdraw');
//    Route::get('unsuspend/withdraw/{id}', "Admin\AdminController@unsuspendWithdraw")->name('unsuspendWithdraw');
//
//
//    Route::get('customers', "Admin\UserController@customers")->name('customers');
//    Route::get('profile/{id}', "Admin\UserController@profile")->name('profile');
//    Route::get('edit/equity/{id}', "Admin\UserController@editEquity")->name('editEquity');
//    Route::post('store/equity/', "Admin\UserController@storeEquity")->name('storeEquity');
//    Route::delete('delete/user/{id}', "Admin\UserController@deleteUser")->name('deleteUser');
//    Route::post('store/user/wallet/{id}', "Admin\UserController@updateWallet")->name('updateWallet');
//    Route::get('set/billing/{id}', 'Admin\UserController@billing')->name('billing');
//    Route::post('set/billing/{id}', 'Admin\UserController@setBilling')->name('setBilling');
//
//
//    Route::get('documents', 'Admin\AdminDocuments@documents')->name('documents');
//    Route::get('approve/document/{id}', "Admin\AdminDocuments@approveDoc")->name('approveDoc');
//
//    });
