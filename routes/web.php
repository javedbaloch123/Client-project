<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\HomeCntroller;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\WhyMeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeCntroller::class, 'index'])->name('home');
Route::get('/login',[ProfileController::class, 'login'])->name('login');
Route::post('/admin/login',[ProfileController::class, 'loginProcess'])->name('login.process');
Route::post('/contact',[ProfileController::class, 'contact'])->name('form.submit');
Route::post('/free-guide', [PortfolioController::class, 'sendGuide'])->name('free-guide.send');

Route::middleware('auth')->group(function(){

Route::get('/admin',[DashController::class, 'index'])->name('dashboard');
Route::get('/admin/home',[HeroController::class, 'index'])->name('admin.hero');
Route::post('/admin/home/{id}',[HeroController::class, 'update'])->name('admin.update');
Route::post('/admin/about/{id}',[AboutController::class, 'update'])->name('about.update');
Route::get('/admin/about',[AboutController::class, 'index'])->name('admin.about');
Route::get('/admin/why-me',[WhyMeController::class, 'index'])->name('admin.WhyMe');
Route::post('/admin/why-me/{id}',[WhyMeController::class, 'update'])->name('whyme.update');
Route::get('/admin/project/{id}',[PortfolioController::class, 'show'])->name('project.show');
Route::get('/admin/project',[PortfolioController::class, 'index'])->name('project.index');
Route::get('/admin/add-project',[PortfolioController::class, 'create'])->name('add.project');
Route::post('/admin/create-project',[PortfolioController::class, 'store'])->name('create.project');
Route::get('/admin/edit-project/{id}',[PortfolioController::class, 'edit'])->name('project.edit');
Route::post('/admin/update-project/{id}',[PortfolioController::class, 'update'])->name('update.project');
Route::get('/admin/delete-project/{id}',[PortfolioController::class, 'destroy'])->name('delete.project');
Route::get('/admin/read-more',[HomeCntroller::class, 'readMore'])->name('readMore');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/admin/add-service',[ServiceController::class, 'create'])->name('add.service');
Route::post('/admin/create-service',[ServiceController::class, 'store'])->name('create.service');
Route::get('/admin/edit-service/{id}',[ServiceController::class, 'edit'])->name('service.edit');
Route::post('/admin/update-service/{id}',[ServiceController::class, 'update'])->name('update.service');
Route::get('/admin/delete-service/{id}',[ServiceController::class, 'destroy'])->name('delete.service');

Route::get('/admin/profile',[ProfileController::class, 'index'])->name('profile');
Route::post('/admin/update-profile',[ProfileController::class, 'updateProfile'])->name('update.profile');
Route::post('/admin/update-password',[ProfileController::class, 'updatePassword'])->name('update.password');
Route::get('/admin/email',[ProfileController::class, 'email'])->name('email');
Route::get('/admin/forget-password',[ProfileController::class, 'forgetPass'])->name('forget.pass');
Route::post('/admin/email-process',[ProfileController::class, 'emailProcess'])->name('email.process');
Route::post('/admin/password-process',[ProfileController::class, 'passwordProcess'])->name('password.process');
Route::get('/admin/testimonials',[ProfileController::class, 'testimonial'])->name('testimonial');
Route::get('/admin/add-testimonials',[ProfileController::class, 'addtestimonial'])->name('add.testimonial');
Route::post('/admin/testimonials',[ProfileController::class, 'createTestimonial'])->name('create.testimonial');
Route::get('/admin/delete-testimonials/{id}',[ProfileController::class, 'deleteTestimonial'])->name('delete.testimonial');
});
 


 







