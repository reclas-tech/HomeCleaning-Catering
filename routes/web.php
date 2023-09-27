<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/cmsDashboard', function () {
    return view('cmsDashboard');
});
Route::get('/cmsCateringPacket', function () {
    return view('cmsCateringPacket');
});

Route::get('/cmsCateringPacketAdd', function () {
    return view('cmsCateringPacketAdd');
});

Route::get('/cmsCateringPacketEdit', function () {
    return view('cmsCateringPacketEdit');
});

Route::get('/cmsCateringProduct', function () {
    return view('cmsCateringProduct');
});

Route::get('/cmsCateringProductAdd', function () {
    return view('cmsCateringProductAdd');
});

Route::get('/loginPage', function () {
    return view('loginPage');
});

Route::get('/forgetPassword', function () {
return view('forgetPassword');
});

Route::get('/forgetPasswordOTP', function () {
return view('forgetPasswordOTP');
});

Route::get('/createNewPassword', function () {
return view('createNewPassword');
});

// Working Companies
Route::get('/cmsWorkingCompanies', function () {
    return view('cmsWorkingCompanies');
});
Route::get('/cmsWorkingCompaniesAddContent', function () {
    return view('cmsWorkingCompaniesAddContent');
});
Route::get('/cmsWorkingCompaniesEditContent', function () {
    return view('cmsWorkingCompaniesEditContent');
});

// Services Companies
Route::get('/cmsServices', function () {
    return view('cmsServices');
});
Route::get('/cmsServicesAddContent', function () {
    return view('cmsServicesAddContent');
});
Route::get('/cmsServicesEditContent', function () {
    return view('cmsServicesEditContent');
});
