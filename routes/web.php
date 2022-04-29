<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AudioController;
use App\Http\Controllers\BackgroundAudioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FrontendUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\LogoManagerController;
use App\Http\Controllers\PackageManagementController;
use App\Http\Controllers\PageNameController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\SubcriptionController;
use App\Http\Controllers\UserDashboard\Coachescontroller;
use App\Http\Controllers\UserDashboard\EvaluatorsController;
use App\Http\Controllers\UserDashboard\UserPasswordcontroller;
use App\Http\Controllers\UserDashboard\UserProfilecontroller;
use App\Http\Controllers\UserManagement;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;




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


require __DIR__.'/auth.php';

// Route::view('admin', 'auth.login')->name('admin');
Route::get('/admin', function () {
    return view('auth.login');
});

Route::prefix('dashboard')->group(function () {

    Route::view('index', 'dashboard.index')->name('index');

});


// Route::get('/dashboard', function () {


//     return view('dashboard.index');

// })->middleware(['auth'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Admin Theme Made Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['preventBackHistory','isAdmin'])->group(function () {

Route::middleware(['isAdmin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });


    Route::prefix('admin')->group(function () {

        Route::get('admin', [AdminController::class, 'index'])->name('admin');
        Route::get('admin_create', [AdminController::class, 'create'])->name('admin_create');
        Route::post('admin_store', [AdminController::class, 'store'])->name('admin_store');
        Route::get('admin_edit/{id}', [AdminController::class, 'edit'])->name('admin_edit');
        Route::post('admin_update/{id}', [AdminController::class, 'update'])->name('admin_update');
        Route::get('admin_destroy/{id}', [AdminController::class, 'destroy'])->name('admin_destroy');

    });

    Route::prefix('user')->group(function () {

        Route::get('user', [UserManagement::class, 'index'])->name('user');
        Route::get('user_create', [UserManagement::class, 'create'])->name('user_create');
        Route::post('user_store', [UserManagement::class, 'store'])->name('user_store');
        Route::get('user_edit/{id}', [UserManagement::class, 'edit'])->name('user_edit');
        Route::post('user_update/{id}', [UserManagement::class, 'update'])->name('user_update');
        Route::get('user_destroy/{id}', [UserManagement::class, 'destroy'])->name('user_destroy');

    });

    Route::prefix('Subcription')->group(function () {

        Route::get('Subcription', [SubcriptionController::class, 'index'])->name('Subcription');
        Route::get('Subcription_create', [SubcriptionController::class, 'create'])->name('Subcription_create');
        Route::post('Subcription_store', [SubcriptionController::class, 'store'])->name('Subcription_store');
        Route::get('Subcription_edit/{id}', [SubcriptionController::class, 'edit'])->name('Subcription_edit');
        Route::post('Subcription_update/{id}', [SubcriptionController::class, 'update'])->name('Subcription_update');
        Route::get('Subcription_destroy/{id}', [SubcriptionController::class, 'destroy'])->name('Subcription_destroy');

    });


    Route::prefix('Package')->group(function () {

        Route::get('Package', [PackageManagementController::class, 'index'])->name('Package');
        Route::get('Package_create', [PackageManagementController::class, 'create'])->name('Package_create');
        Route::post('Package_store', [PackageManagementController::class, 'store'])->name('Package_store');
        Route::get('Package_edit/{id}', [PackageManagementController::class, 'edit'])->name('Package_edit');
        Route::post('Package_update/{id}', [PackageManagementController::class, 'update'])->name('Package_update');
        Route::get('Package_destroy/{id}', [PackageManagementController::class, 'destroy'])->name('Package_destroy');

    });

    Route::prefix('FAQ')->group(function () {

        Route::get('FAQ', [FAQController::class, 'index'])->name('FAQ');
        Route::get('FAQ_create', [FAQController::class, 'create'])->name('FAQ_create');
        Route::post('FAQ_store', [FAQController::class, 'store'])->name('FAQ_store');
        Route::get('FAQ_edit/{id}', [FAQController::class, 'edit'])->name('FAQ_edit');
        Route::post('FAQ_update/{id}', [FAQController::class, 'update'])->name('FAQ_update');
        Route::get('FAQ_destroy/{id}', [FAQController::class, 'destroy'])->name('FAQ_destroy');

    });


    Route::prefix('project')->group(function () {

        Route::get('projects', [CmsController::class, 'projects_Index'])->name('projects');
        Route::get('projectcreate', [CmsController::class, 'project_create'])->name('projectcreate');
        Route::post('projectadd', [CmsController::class, 'project_add'])->name('projectadd');
        Route::get('project-edit/{id}', [CmsController::class, 'project_edit'])->name('project_edit');
        Route::post('project-update/{id}', [CmsController::class, 'project_update'])->name('project_update');
        Route::get('projectdestroy/{id}', [CmsController::class, 'project_destroy'])->name('project_destroy');

        Route::get('PageName', [PageNameController::class, 'index'])->name('PageName');
        Route::get('PageName_create', [PageNameController::class, 'create'])->name('PageName_create');
        Route::post('PageName_store', [PageNameController::class, 'store'])->name('PageName_store');
        Route::get('PageName_edit/{id}', [PageNameController::class, 'edit'])->name('PageName_edit');
        Route::post('PageName_update/{id}', [PageNameController::class, 'update'])->name('PageName_update');
        Route::get('PageName_destroy/{id}', [PageNameController::class, 'destroy'])->name('PageName_destroy');

        Route::get('PageContent', [FrontendController::class, 'index'])->name('PageContent');
        Route::get('PageContent_create', [FrontendController::class, 'create'])->name('PageContent_create');
        Route::post('PageContent_store', [FrontendController::class, 'store'])->name('PageContent_store');
        Route::get('PageContent_edit/{id}', [FrontendController::class, 'edit'])->name('PageContent_edit');
        Route::post('PageContent_update/{id}', [FrontendController::class, 'update'])->name('PageContent_update');
        Route::get('PageContent_destroy/{id}', [FrontendController::class, 'destroy'])->name('PageContent_destroy');

        Route::get('logo', [LogoManagerController::class, 'logo_Index'])->name('logo');
        Route::get('logoCreate', [LogoManagerController::class, 'logo_create'])->name('logoCreate');
        Route::post('logoAdd', [LogoManagerController::class, 'logo_add'])->name('logoAdd');
        Route::get('logoEdit/{id}', [LogoManagerController::class, 'logo_edit'])->name('logoEdit');
        Route::post('logoUpdate/{id}', [LogoManagerController::class, 'logo_update'])->name('logoUpdate');
        Route::get('logodestroy/{id}', [LogoManagerController::class, 'logo_destroy'])->name('logodestroy');


    });


    Route::prefix('general')->group(function () {

        Route::get('social', [SocialController::class, 'index'])->name('social');
        Route::get('socialCreate', [SocialController::class, 'create'])->name('socialCreate');
        Route::post('socialAdd', [SocialController::class, 'store'])->name('socialAdd');
        Route::get('socialEdit/{id}', [SocialController::class, 'edit'])->name('socialEdit');
        Route::post('socialUpdate/{id}', [SocialController::class, 'update'])->name('socialUpdate');
        Route::get('socialdestroy/{id}', [SocialController::class, 'destroy'])->name('socialdestroy');

        Route::get('congfigration', [ConfigurationController::class, 'index'])->name('congfigration');
        Route::get('congfigrationCreate', [ConfigurationController::class, 'create'])->name('congfigrationCreate');
        Route::post('congfigrationAdd', [ConfigurationController::class, 'store'])->name('congfigrationAdd');
        Route::get('congfigrationEdit/{id}', [ConfigurationController::class, 'edit'])->name('congfigrationEdit');
        Route::post('congfigrationUpdate/{id}', [ConfigurationController::class, 'update'])->name('congfigrationUpdate');
        Route::get('congfigrationdestroy/{id}', [ConfigurationController::class, 'destroy'])->name('congfigrationdestroy');

    });


    Route::prefix('blog')->group(function () {

        Route::get('blog', [BlogController::class, 'index'])->name('blog');
        Route::get('blogCreate', [BlogController::class, 'create'])->name('blogCreate');
        Route::post('blogAdd', [BlogController::class, 'store'])->name('blogAdd');
        Route::get('blogEdit/{id}', [BlogController::class, 'edit'])->name('blogEdit');
        Route::post('blogUpdate/{id}', [BlogController::class, 'update'])->name('blogUpdate');
        Route::get('blogdestroy/{id}', [BlogController::class, 'destroy'])->name('blogdestroy');
    });


    Route::prefix('video')->group(function () {

        Route::get('video', [VideoController::class, 'index'])->name('video');
        Route::get('videoCreate', [VideoController::class, 'create'])->name('videoCreate');
        Route::post('videostore', [VideoController::class, 'store'])->name('videostore');
        Route::get('videoEdit/{id}', [VideoController::class, 'edit'])->name('videoEdit');
        Route::post('videoUpdate/{id}', [VideoController::class, 'update'])->name('videoUpdate');
        Route::get('videodestroy/{id}', [VideoController::class, 'destroy'])->name('videodestroy');

        Route::get('BackAudio', [BackgroundAudioController::class, 'index'])->name('BackAudio');
        Route::get('BackAudioCreate', [BackgroundAudioController::class, 'create'])->name('BackAudioCreate');
        Route::post('BackAudiostore', [BackgroundAudioController::class, 'store'])->name('BackAudiostore');
        Route::get('BackAudioEdit/{id}', [BackgroundAudioController::class, 'edit'])->name('BackAudioEdit');
        Route::post('BackAudioUpdate/{id}', [BackgroundAudioController::class, 'update'])->name('BackAudioUpdate');
        Route::get('BackAudiodestroy/{id}', [BackgroundAudioController::class, 'destroy'])->name('BackAudiodestroy');

    });


    Route::prefix('audio')->group(function () {

        Route::get('audio', [AudioController::class, 'index'])->name('audio');
        Route::get('audioCreate', [AudioController::class, 'create'])->name('audioCreate');
        Route::post('audiostore', [AudioController::class, 'store'])->name('audiostore');
        Route::get('audioEdit/{id}', [AudioController::class, 'edit'])->name('audioEdit');
        Route::post('audioUpdate/{id}', [AudioController::class, 'update'])->name('audioUpdate');
        Route::get('audiodestroy/{id}', [AudioController::class, 'destroy'])->name('audiodestroy');

    });


    Route::prefix('Inquiry')->group(function () {

        Route::get('Inquiry', [InquiryController::class, 'index'])->name('Inquiry');
        Route::get('InquiryCreate', [InquiryController::class, 'create'])->name('InquiryCreate');
        Route::post('InquiryAdd', [InquiryController::class, 'store'])->name('InquiryAdd');
        Route::get('InquiryEdit/{id}', [InquiryController::class, 'edit'])->name('InquiryEdit');
        Route::post('InquiryUpdate/{id}', [InquiryController::class, 'update'])->name('InquiryUpdate');
        Route::get('Inquiryldestroy/{id}', [InquiryController::class, 'destroy'])->name('Inquirydestroy');

    });

});

});


/*
|--------------------------------------------------------------------------
| Front End Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    // Route::view('/', 'home')->name('home');
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('About', [HomeController::class, 'about'])->name('about-amea');
    Route::get('BandRoom', [HomeController::class, 'BandRoom'])->name('Band-Room');
    Route::get('AmeaToday', [HomeController::class, 'AmeaToday'])->name('amea-today');
    Route::get('educators', [HomeController::class, 'educators'])->name('educators');
    Route::get('educators-Boosters', [HomeController::class, 'educatorsBoosters'])->name('educators-Boosters');
    Route::get('educators-by-laws', [HomeController::class, 'educatorsbylaws'])->name('educators-by-laws');
    Route::get('educators-fund-raising', [HomeController::class, 'educatorsFundRaising'])->name('educators-fund-raising');
    Route::get('Pre-Festival', [HomeController::class, 'PreFestival'])->name('Pre-Festival');
    Route::get('Arrangers-Composer', [HomeController::class, 'ArrangersComposer'])->name('Arrangers-Composer');
    Route::get('private-instructors', [HomeController::class, 'privateInstructors'])->name('private-instructors');
    Route::get('private-instrumental', [HomeController::class, 'privateInstrumental'])->name('private-instrumental');
    Route::get('private-dance', [HomeController::class, 'privateDance'])->name('private-dance');
    Route::get('private-vocal', [HomeController::class, 'privateVocal'])->name('private-vocal');
    Route::get('private-all-state-pre', [HomeController::class, 'privateallStatePre'])->name('private-all-state-pre');
    Route::get('more-singers', [HomeController::class, 'moreSingers'])->name('more-singers');
    Route::get('Music-Producers', [HomeController::class, 'MusicProducers'])->name('Music-Producers');
    Route::get('order-summary', [HomeController::class, 'orderSummary'])->name('order-summary');
    Route::get('AmeaToday_checkout', [HomeController::class, 'checkout'])->name('AmeaToday_checkout');
    Route::get('AmeaToday_buy-now', [HomeController::class, 'buyNow'])->name('AmeaToday_buy-now');


    // Route::get('page/{id}', [HomeController::class, 'getContent'])->name('get_content');

    Route::get('sign-up', [FrontendUserController::class, 'signUp'])->name('signUp');
    Route::get('login-page', [FrontendUserController::class, 'loginPage'])->name('login-page');
    Route::get('user_create', [FrontendUserController::class, 'create'])->name('user_create');
    Route::post('FrontendUser_store', [FrontendUserController::class, 'store'])->name('FrontendUser_store');
    Route::post('FrontendUser_login', [FrontendUserController::class, 'login'])->name('FrontendUser_login');
    Route::get('FrontendUser_logout', [FrontendUserController::class, 'logout'])->name('FrontendUser_logout');
    Route::get('create_new_password', [FrontendUserController::class, 'forgot'])->name('create_new_password');


    /*
|--------------------------------------------------------------------------
| User Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['preventBackHistory','UserCheck'])->group(function () {

Route::middleware(['UserCheck'])->group(function () {

    Route::get('AmeaToday_user-dashboard', [HomeController::class, 'dashboard'])->name('AmeaToday_user-dashboard');
    Route::get('User_Profile_edit/{id}', [UserProfilecontroller::class, 'edit'])->name('User_Profile_edit');
    Route::post('User_Profile_update/{id}', [UserProfilecontroller::class, 'update'])->name('User_Profile_update');

    Route::get('User_Password_edit/{id}', [UserPasswordcontroller::class, 'edit'])->name('User_Password_edit');
    Route::post('User_Password_update/{id}', [UserPasswordcontroller::class, 'update'])->name('User_Password_update');

    Route::get('coaches', [Coachescontroller::class, 'index'])->name('coaches');

    Route::get('Evaluators', [EvaluatorsController::class, 'index'])->name('Evaluators');

});

});




/*
|--------------------------------------------------------------------------
| Theme made Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Language Change
Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'de', 'es','fr','pt', 'cn', 'ae'])) {
        abort(400);
    }
    Session()->put('locale', $locale);
    Session::get('locale');
    return redirect()->back();
})->name('lang');













