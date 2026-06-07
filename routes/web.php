<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyDatailsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BasicInfoController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\NewsEventController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\LandOwnerController;
use App\Http\Controllers\BuyersController;
use App\Http\Controllers\SubMenuController;
use App\Http\Controllers\ContentController;

Route::get('/login', function () {
    return view('admin.auth.login');
});

Route::get('/',[HomeController::class,'index']);

Route::get('aboutus/{id}',[AboutUsController::class,'aboutus']);
Route::get('services/{id}',[ServicesController::class,'services']);

Route::get('/news-events', [NewsEventController::class, 'webview'])
->name('news-events.index');
Route::get('/blogs', [NewsEventController::class, 'webview'])
->name('blogs.index');
Route::get('/news-events/{newsevent}', [NewsEventController::class, 'n_eDetails'])
->name('news-events.show');
Route::get('/blogs-details/{newsevent}', [NewsEventController::class, 'n_eDetails'])
->name('blogs.show');

Route::get('projects',[ProjectController::class,'viewProjects']);
Route::get('projectDetails/{id}',[ProjectController::class,'projectDetails']);
Route::get('contact/{id}',[ContactsController::class,'index']);
Route::resource('landowners', LandOwnerController::class);
Route::resource('buyers', BuyersController::class);
Route::get('projectSearch/{project}/{typeID}/{proLoc}', [ProjectController::class,'projectSearch']);


Route::get('message', [MessageController::class, 'index'])->name('message.index');
Route::delete('message/{id}', [MessageController::class, 'destroy'])->name('message.destroy');
Route::get('message/{id}/toggle', [MessageController::class, 'toggleRead'])->name('message.toggle');


Route::middleware('auth')->group(function () {
    
    Route::get('/usermanage', [UserController::class,'index']);
    Route::get('/usermanageCreate', [UserController::class,'create']);
    Route::post('/usermanage', [UserController::class,'store']);
    Route::get('/usermanageDestroy/{id}', [UserController::class,'destroy']);
    Route::get('/usermanageEdit/{id}', [UserController::class,'edit']);
    Route::patch('/usermanage', [UserController::class,'update']);


    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::resource('company', CompanyDatailsController::class);
    Route::resource('basicinfo', BasicInfoController::class);
    Route::resource('admin/projects', ProjectController::class);
    Route::get('proImgDel/{id}',[ ProjectController::class,'proImgDel']);
    Route::resource('slider', SliderController::class);
    Route::resource('admin/blogs', NewsEventController::class);
    Route::resource('admin/landowners', LandOwnerController::class);
    Route::get('landOwnerMsg/{id}/{s}', [LandOwnerController::class,'markAs']);
    Route::resource('admin/buyers', BuyersController::class);
    Route::get('buyersMsg/{id}/{s}', [BuyersController::class,'markAs']);
    Route::resource('sub-menu', SubMenuController::class);
    Route::resource('contents', ContentController::class);
    Route::get('loadSubMenu/{id}', [ContentController::class,'subMenuLoad']);

});

require __DIR__.'/auth.php';
