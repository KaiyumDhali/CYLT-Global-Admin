<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientReviewController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactformController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomepageApiController;

Route::get('/test', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'API Working in Laravel 12!'
    ]);
});

Route::get('/homepage', [HomepageApiController::class,'show']); 
Route::get('/aboutss', [AboutController::class, 'apiindex']); 
Route::get('/clients', [ClientController::class, 'apiindex']); 
Route::get('/sliders', [SliderController::class, 'apiindex']); 
Route::get('/galleries', [GalleryController::class, 'apiindex']); 
Route::get('/companies', [CompanyController::class, 'apiIndex']); 
Route::get('/services', [ServiceController::class, 'apiIndex']); 
Route::get('/products', [ProductController::class, 'apiindex']); 
Route::get('/reviews', [ClientReviewController::class, 'apiindex']); 
Route::get('/employees', [EmployeeController::class, 'apiindex']); 
Route::get('/projects', [ProjectController::class, 'apiindex']); 
Route::post('/contact', [ContactformController::class, 'store']);
