<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\SiteContentController;
use App\Http\Controllers\Admin\SocialLinksController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
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


// Auth Routes
Route::middleware('guest')->group(function () {
    route::controller(AuthController::class)->group(function () {
        Route::get('admin/login', 'adminLogin')->name('admin.login');
        Route::post('admin/login', 'AdminLoginProcess')->name('admin.login-process');

        // Route::get('/register', 'register')->name('register');
        // Route::post('/register', 'registerProcess')->name('register-process');

        // Route::get('/login', 'login')->name('login');
        // Route::post('/login', 'loginProcess')->name('login-process');


        // Route::get('forgot-password', 'forgotPassword')->name('forgot.password');
        // Route::post('forgot-password', 'forgotPasswordProcess')->name('forgot.password.process');
        // Route::get('reset.password/{token}', 'showResetPasswordForm')->name('reset.password');
        // Route::post('reset-password', 'submitResetPasswordForm')->name('reset.password.process');
    });
});


Route::middleware(['sdl-attorneys-at-law:admin', 'auth'])->prefix('admin')->group(function () {
    // Admin Routes
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('admin.dashboard');
        Route::get('/logout', 'logout')->name('admin.logout');

        // Route::get('/contact-us', 'contactUs')->name('admin.contact-us');
        // Route::get('/contact-us/datatables', 'datatables')->name('contact-us.datatables');
        // Route::get('/contact-us/delete/{id}', 'destroy')->name('contact-us.delete');
    });

    // Home Setion
    Route::controller(AdminHomeController::class)->group(function () {
        Route::get('/home-section', 'index')->name('admin.home-section.index');
        Route::get('/home-section/datatables',  'datatables');
        Route::delete('/home-section/delete/{id}',  'delete')->name('admin.home-section.delete');
        Route::get('/home-section/create', 'create')->name('admin.home-section.create');
        Route::post('/home-section/create', 'store')->name('admin.home-section.store');
    });

    // Site Content
    Route::controller(SiteContentController::class)->group(function () {
        Route::get('/manage-content-section', 'index')->name('admin.manage-content-section');
        Route::post('/logo-section', 'uploadLogo')->name('admin.upload-logo');
        Route::post('/phone-section', 'uploadPhone')->name('admin.upload-phone');
        Route::post('/address-section', 'uploadAddress')->name('admin.upload-address');
        Route::post('/why-choose-heading-section', 'uploadWhyChooseHeading')->name('admin.upload-why-choose-heading');
        Route::post('/why-choose-description-section', 'uploadWhyChooseDescription')->name('admin.upload-why-choose-description');
        Route::post('/why-choose-image-section', 'uploadWhyChooseImage')->name('admin.upload-why-choose-image');
        Route::post('/footer-description-section', 'uploadFooterDescription')->name('admin.upload-footer-description');
        Route::post('/footer-copyright-section', 'uploadFooterCopyright')->name('admin.upload-footer-copyright');
    });

    // Social Links
    Route::controller(SocialLinksController::class)->group(function () {
        Route::get('/manage-social-links', 'manageSocialLinks')->name('admin.manage.social.links');
        Route::post('/manage-social-links', 'updateSocialLinks')->name('admin.update.social.links');
    });

    // Blog Routes
    Route::controller(BlogController::class)->group(function () {
        Route::get('/manage-blog', 'manageBlog')->name('admin.blog.manage');
        Route::post('/manage-blog', 'storeBlog')->name('admin.blog.upload');
    });

    Route::get('/property/datatables', [PropertyController::class, 'datatable'])->name('datatables.property');
    Route::get('/property', [PropertyController::class, 'index'])->name('show.property');
    Route::get('/property/create', [PropertyController::class, 'create'])->name('create.property');
    Route::post('/property/store', [PropertyController::class, 'store'])->name('store.property');
    Route::get('/property/edit/{id}', [PropertyController::class, 'edit'])->name('edit.property');
    Route::post('/property/update/{id}', [PropertyController::class, 'update'])->name('update.property');
    Route::get('/property/delete/{id}', [PropertyController::class, 'destroy'])->name('delete.property');
});

Route::middleware(['sdl-attorneys-at-law:user', 'auth'])->prefix('user')->group(function () {
    // User Routes
    Route::controller(UserController::class)->group(function () {
        Route::get('/logout', 'logout')->name('user.logout');
    });
});


Route::middleware('admin.restricted.routes')->group(function () {

    // HomePage Routes:
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('home');

        // Meet our Team
        Route::get('/attorneys', 'attorneys')->name('attorneys');
        Route::get('/supporting-staff', 'supportingStaff')->name('supporting.staff');
        Route::get('/meet-out-team', 'meetOurTeam')->name('meet.out.team');

        // Practive Areas
        Route::get('/practice-areas', 'practiceAreas')->name('practice.areas');
        Route::get('/business-and-corporate-law', 'businessAndCorporateLaw')->name('business.and.corporate.law');
        Route::get('/civil-litigation', 'civilLitigation')->name('civil.litigation');
        Route::get('/construction-contactor-and-disability-law', 'constructionContactorLaw')->name('construction.contactor.law');
        Route::get('/criminal-law', 'criminalLaw')->name('criminal.law');
        Route::get('/probate', 'probate')->name('probate');
        Route::get('/estate-planning', 'estatePlanning')->name('estate.planning');
        Route::get('/family-law', 'familyLaw')->name('family.law');
        Route::get('/immigration', 'immigration')->name('immigration');
        Route::get('/personal-injury', 'personalInjury')->name('personal.injury');
        Route::get('/employment-law', 'employmentLaw')->name('employment.law');

        // Other Routes
        Route::get('/contact', 'contactUs')->name('contact.us');
        Route::get('/blog', 'blog')->name('blog');
    });
});
