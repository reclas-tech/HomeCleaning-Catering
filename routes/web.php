<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CateringPhotoGaleryController;
use App\Http\Controllers\CateringPacketController;
use App\Http\Controllers\OrganigramController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UserController;

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


// DONE
Route::controller(UserController::class) -> group(function () {
    // Route::get('/register', 'viewRegister');
    // Route::post('/register', 'register');
    Route::post('/login', 'authenticate');
    Route::middleware('guest') -> group(function () {
        Route::get('/loginPage', 'viewLogin') -> name('login');
        Route::get('/forgetPassword', 'viewForgetPassword');
        Route::post('/forgetPassword', 'sendEmailForgetPassword');
        Route::post('/otp', 'otpCheck');
        Route::post('/createNewPassword', 'changePassword');
    });
    Route::middleware('auth') -> group(function () {
        Route::get('/home', 'redirectHome');
        Route::get('/logout', 'logout') -> name('logout');
        Route::get('/cmsDashboard', 'viewDashboard') -> name('dashboard');
    });
});

Route::controller(CompanyController::class) -> group(function () {
    Route::middleware('auth') -> group(function () {
        Route::get('/cmsWorkingCompanies', 'all');
        Route::get('/cmsWorkingCompanies/{id}', 'destroy');
        Route::get('/cmsWorkingCompaniesAddContent', 'addView');
        Route::post('/cmsWorkingCompaniesAddContent', 'store');
        Route::get('/cmsWorkingCompanies/edit/{id}', 'editView');
        Route::post('/cmsWorkingCompanies/edit/{id}', 'update');
    });
});

Route::controller(CateringPacketController::class) -> group(function () {
    Route::middleware('auth') -> group(function () {
        Route::get('/cmsCateringPacket', 'all');
        Route::get('/cmsCateringPacket/{id}', 'destroy');
        Route::get('/cmsCateringPacketAdd', 'addView');
        Route::post('/cmsCateringPacketAdd', 'store');
        Route::get('/cmsCateringPacket/edit/{id}', 'editView');
        Route::post('/cmsCateringPacket/edit/{id}', 'update');
    });
});

Route::controller(CateringPhotoGaleryController::class) -> group(function () {
    Route::middleware('auth') -> group(function () {
        Route::get('/cmsCateringPhoto', 'all');
        Route::get('/cmsCateringPhoto/{id}', 'destroy');
        Route::get('/cmsCateringPhotoAdd', 'addView');
        Route::post('/cmsCateringPhotoAdd', 'store');
        Route::get('/cmsCateringPhoto/edit/{id}', 'editView');
        Route::post('/cmsCateringPhoto/edit/{id}', 'update');
    });
});

Route::controller(ServiceController::class) -> group(function () {
    Route::middleware('auth') -> group(function () {
        Route::get('/cmsServices', 'all');
        Route::get('/cmsServices/{id}', 'destroy');
        Route::get('/cmsServicesAddContent', 'addView');
        Route::post('/cmsServicesAddContent', 'store');
        Route::get('/cmsServices/edit/{id}', 'editView');
        Route::post('/cmsServices/edit/{id}', 'update');
    });
});

Route::controller(OrganigramController::class) -> group(function () {
    Route::middleware('auth') -> group(function () {
        Route::get('/cmsOrganigram', 'all');
        Route::get('/cmsOrganigram/{id}', 'destroy');
        Route::get('/cmsOrganigramAdd', 'addView');
        Route::post('/cmsOrganigramAdd', 'store');
        Route::get('/cmsOrganigram/edit/{id}', 'editView');
        Route::post('/cmsOrganigram/edit/{id}', 'update');
    });
});

Route::controller(ViewController::class) -> group(function () {
    Route::get('/', 'index');
    Route::get('/cleaning', 'homeCleaning');
    Route::get('/catering', 'catering');
});





Route::get('/tentang', function () {
    return view('tampilanTentangPerusahaan');
});