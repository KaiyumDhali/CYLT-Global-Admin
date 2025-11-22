<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CasestudyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ClientReviewController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomepageController;


 Route::get('/homepage/edit', [HomepageController::class, 'edit'])->name('homepage.edit');
    Route::post('/homepage/update', [HomepageController::class, 'update'])->name('homepage.update');

Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Route::get('/',[HomeController::class, 'index']);

//about frontend
Route::get('/about-frontend',[AboutController::class, 'frontendaboutindex'])->name('frontendaboutindex');

//Contact
Route::get('/contact-frontend',[ContactController::class, 'frontendcontactindex'])->name('frontendcontactindex');

//Case Study
Route::get('/case-study',[CasestudyController::class, 'index'])->name('case.index');

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');


// FRONTEND product
Route::get('/products', [ProductController::class, 'index'])->name('product.index');


// ADMIN product routes
Route::prefix('products')->group(function () {

    Route::get('/show', [ProductController::class, 'list'])->name('products.list');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/store', [ProductController::class, 'store'])->name('products.store');

    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

    Route::post('/delete-image', [ProductController::class, 'deleteImage'])->name('products.image.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/homepage/edit', [HomepageController::class, 'edit'])->name('homepage.edit');
    Route::post('/homepage/update', [HomepageController::class, 'update'])->name('homepage.update');

    
    // Company Setting
    Route::get('/company_create', [CompanyController::class, 'create'])->name('company.create');
    Route::get('/company', [CompanyController::class, 'index'])->name('company.index');
    Route::post('/company/store', [CompanyController::class, 'store'])->name('company.store');
    Route::get('/company/{id}/edit', [CompanyController::class, 'edit'])->name('company.edit');
    Route::put('/company/{id}', [CompanyController::class, 'update'])->name('company.update');
    Route::delete('/company/{id}', [CompanyController::class, 'destroy'])->name('company.destroy');

    //Slider section
    Route::get('/sliders', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/sliderslist', [SliderController::class, 'sliderlist'])->name('slider.list');
    Route::post('/sliders', [SliderController::class, 'store'])->name('slider.store');
    Route::put('sliders/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::delete('sliders/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');
    
// Gallery section

// Show gallery page
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

// Show gallery list (for admin or data table)
Route::get('/gallery-list', [GalleryController::class, 'list'])->name('gallery.list');

// Store a new gallery image
Route::post('/galleries', [GalleryController::class, 'store'])->name('gallery.store');

// Update an existing gallery image
Route::put('/galleries/{id}', [GalleryController::class, 'update'])->name('gallery.update');

// Delete a gallery image
Route::delete('/galleries/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');


    //Service section

    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/serviceslist', [ServiceController::class, 'serviceList'])->name('services.list');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('services/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

    //About Section

    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::get('/aboutlist', [AboutController::class, 'aboutList'])->name('about.list');
    Route::post('/about', [AboutController::class, 'store'])->name('about.store');
    Route::get('/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
    Route::put('/about/{id}', [AboutController::class, 'update'])->name('about.update');
    Route::delete('/about/{id}', [AboutController::class, 'destroy'])->name('about.destroy');


    //Our Clients Section

    Route::get('/client', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/clientlist', [ClientController::class, 'clientList'])->name('clients.list');
    Route::post('/client', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/client/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::put('/client/{id}', [ClientController::class, 'update'])->name('clients.update');
    Route::delete('/client/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');



Route::resource('client-reviews', ClientReviewController::class);

    //Project Section



Route::get('/project', [ProjectController::class, 'index'])->name('projects.index');          // Project add page
Route::get('/projectlist', [ProjectController::class, 'projectList'])->name('projects.list'); // Project list page
Route::post('/project', [ProjectController::class, 'store'])->name('projects.store');         // Store new project
Route::get('/project/{id}/edit', [ProjectController::class, 'edit'])->name('projects.edit');  // Edit project
Route::put('/project/{id}', [ProjectController::class, 'update'])->name('projects.update');  // Update project
Route::delete('/project/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy'); // Delete project


//category

Route::post('/category', [CategoryController::class, 'store'])->name('categories.store');

//Employee
Route::resource('employees', EmployeeController::class);


});

require __DIR__.'/auth.php';
