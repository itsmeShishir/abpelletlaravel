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

Auth::routes(['register' => false]);
Route::get('/',[\App\Http\Controllers\Frontend\IndexController::class,'index'])->name('index');
Route::get('aboutus',[\App\Http\Controllers\Frontend\AboutController::class,'index'])->name('aboutus');
Route::get('teams',[\App\Http\Controllers\Frontend\TeamController::class,'index'])->name('teams');
Route::get('associations',[\App\Http\Controllers\Frontend\AssociationsController::class,'index'])->name('associations');
Route::get('contact',[\App\Http\Controllers\Frontend\ContactController::class,'index'])->name('contact');
Route::post('contact-form',[\App\Http\Controllers\Frontend\ContactController::class,'contactForm'])->name('contact.form');
Route::get('product',[\App\Http\Controllers\Frontend\ProductController::class,'index'])->name('product');
Route::get('product-details/{slug}/',[\App\Http\Controllers\Frontend\IndexController::class,'show'])->name('productdetails.details');
Route::get('blog-detail/{slug}/',[\App\Http\Controllers\Frontend\IndexController::class,'blogshow'])->name('blogdetail.details');

Route::get('blogs',[\App\Http\Controllers\Frontend\BlogController::class,'index'])->name('blogs');
Route::get('blog-detail/{slug}/',[\App\Http\Controllers\Frontend\BlogController::class,'blogshow'])->name('blogdetail.details');

Route::get('companies',[\App\Http\Controllers\Frontend\CompaniesController::class,'index'])->name('companies');
Route::get('distributer',[\App\Http\Controllers\Frontend\DistributerController::class,'index'])->name('distributer');
Route::get('category/{id}/',[\App\Http\Controllers\Frontend\IndexController::class,'mainCategory'])->name('main.category');

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Contact us page
    Route::get('/admin/contact',[\App\Http\Controllers\Backend\ContactController::class,'index'])->name('list.contact');
    Route::delete('/admin/contact/{id}',[\App\Http\Controllers\Backend\ContactController::class,'destroy'])->name('contact.destroy');

    // for About Page in admin
    Route::get('admin/edit/aboutuspage',[\App\Http\Controllers\Backend\AboutController::class,'index'])->name('about.index');
    Route::put('aboutus/update',[\App\Http\Controllers\Backend\AboutController::class,'update'])->name('aboutus.update');

    //category
    Route::get('/admin/category',[\App\Http\Controllers\Backend\CategoryController::class,'index'])->name('list.category');
    Route::post('/category_status',[\App\Http\Controllers\Backend\CategoryController::class,'blogcategoryStatus'])->name('category.status');
    Route::get('/admin/category/addcategory',[\App\Http\Controllers\Backend\CategoryController::class,'blogcreate'])->name('list.create');
    Route::post('/admin/category/add',[\App\Http\Controllers\Backend\CategoryController::class,'blogstore'])->name('list.store');
    Route::get('/admin/category/editmain/{id}',[\App\Http\Controllers\Backend\CategoryController::class,'blogedit'])->name('category.edit');
    Route::put('/admin/category/update/{id}',[\App\Http\Controllers\Backend\CategoryController::class,'blogupdate'])->name('category.update');
    Route::delete('/admin/category/delete/{id}',[\App\Http\Controllers\Backend\CategoryController::class,'blogdestroy'])->name('category.destroy');

    // Product
    Route::resource('/adminproduct',\App\Http\Controllers\Backend\ProductController::class);
    Route::post('adminproduct_status',[\App\Http\Controllers\Backend\ProductController::class,'adminbannerStatus'])->name('adminbanner.status');

    // BlogCategory
    Route::resource('/adminBlogcategory',\App\Http\Controllers\Backend\CategoryBlogController::class);
    Route::post('adminBlogcategory_status',[\App\Http\Controllers\Backend\CategoryBlogController::class,'adminbannerStatus'])->name('adminbanner.status');

    // Blog
    Route::resource('/adminBlog',\App\Http\Controllers\Backend\BlogController::class);
    Route::post('adminBlog_status',[\App\Http\Controllers\Backend\BlogController::class,'adminbannerStatus'])->name('adminbanner.status');

    // Slider
    Route::resource('/adminSlider',\App\Http\Controllers\Backend\SliderController::class);
    Route::post('adminSlider_status',[\App\Http\Controllers\Backend\SliderController::class,'adminbannerStatus'])->name('adminbanner.status');

    // Teams
    Route::resource('/adminTeams',\App\Http\Controllers\Backend\TeamController::class);
    Route::post('adminTeams_status',[\App\Http\Controllers\Backend\TeamController::class,'adminbannerStatus'])->name('adminbanner.status');

    // Association
    Route::resource('/adminAssociation',\App\Http\Controllers\Backend\AssociationController::class);
    Route::post('adminAssociation_status',[\App\Http\Controllers\Backend\AssociationController::class,'adminbannerStatus'])->name('adminbanner.status');

    // Company
    Route::resource('/admincompany',\App\Http\Controllers\Backend\CompaniesController::class);
    Route::post('admincompany_status',[\App\Http\Controllers\Backend\CompaniesController::class,'adminbannerStatus'])->name('adminbanner.status');

    // Distributer
    Route::resource('/admindistributter',\App\Http\Controllers\Backend\DistributionController::class);
    Route::post('admindistributter_status',[\App\Http\Controllers\Backend\DistributionController::class,'adminbannerStatus'])->name('adminbanner.status');

     // for House Page in admin
     Route::get('admin/Home/edithomepage',[\App\Http\Controllers\Backend\HomeController::class,'index'])->name('house.index');
     Route::put('House/update',[\App\Http\Controllers\Backend\HomeController::class,'update'])->name('house.update');

    // setting Route
    Route::get('admin/setting',[\App\Http\Controllers\Backend\SettingController::class,'index'])->name('setting.index');
    Route::put('admin/setting/Update',[\App\Http\Controllers\Backend\SettingController::class,'settingsUpdate'])->name('setting.update');

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});



