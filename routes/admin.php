<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ReferralController;
use App\Http\Controllers\admin\ReviewController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\PaymentController;
use App\Http\Controllers\admin\InvoiceController;
use App\Http\Controllers\admin\DiscountController;
use App\Http\Controllers\admin\ExhibitionController;
use App\Http\Controllers\admin\GiftController;
use App\Http\Controllers\admin\ReportsController;
use App\Http\Controllers\admin\DesignerController;
use App\Http\Controllers\admin\ProductGeneralController;

Route::get('login', [AdminAuthController::class, 'login'])->name('login');
Route::post('admin-login-action', [AdminAuthController::class, 'adminLoginAction']);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['App\Http\Middleware\AdminAuth']], function () {
    Route::get('dashboard', [AdminAuthController::class, 'dashboard']);
    Route::get('enquiry', [AdminAuthController::class, 'enquiry']);
    Route::get('logout', [AdminAuthController::class, 'logout']);



    Route::group(['prefix' => 'customer', 'as' => 'customer.'], function () {
        Route::get('list', [CustomerController::class, 'customerList']);
        Route::get('overview', [CustomerController::class, 'overview']);
        Route::get('security', [CustomerController::class, 'security']);
        Route::get('address_and_billing', [CustomerController::class, 'address_and_billing']);
        Route::get('notification', [CustomerController::class, 'notification']);
    });


});
