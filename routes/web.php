<?php
use App\Http\Controllers\StokController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LokasiiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;

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
Route::resource('stok', StokController::class);

Route::get('/index', [DonorController::class,'index']);

Route::get('/login', [DonorController::class,'login']);

Route::get('/blog', [DonorController::class,'blog']);

Route::get('single-blog1', [DonorController::class,'singleblog1']);

Route::get('/single-blog2', [DonorController::class,'singleblog2']);

Route::get('/single-blog3', [DonorController::class,'singleblog3']);


Route::get('/single-blog4', [DonorController::class,'singleblog4']);

Route::get('/stok', [DonorController::class,'stok']);

Route::get('/lokasi', [DonorController::class,'lokasi']);


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/admin1', function () {
    return view('admin2');
});

Route::get('/admin', function () {
    return view('admin/admin');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/Profile', function () {
    return view('profile');
});

Route::get('/Profile1', function () {
    return view('profilee');
});




Route::get('/addblog', function () {
    return view('admin/blog/addblog');
});

Route::get('/viewblog', function () {
    return view('admin/blog/viewblog');
});

Route::get('/removeblog', function () {
    return view('admin/blog/removeblog');
});

Route::get('/editblog', function () {
    return view('admin/blog/editblog');
});

/*
Route::resource('')
Route::get('/addstok', [StokController::class,'index']); */

##Route::post('/store', [StokController::class,'store'])->name('store');
Route::resource('/addstok', StokController::class);

Route::resource('/blog', BlogController::class);

// Route::get('/viewlokasi', [LokasiController::class, 'viewlokasi']);

Route::get('/viewlokasi', [LokasiiController::class, 'index']);



Route::get('/viewstok', function () {
    return view('admin/stok/viewstok');
});

// Route::get('/editstok', function () {
//     return view('admin/stok/editstok');
// });




Route::get('/adddetail', function () {
    return view('admin/butuh/adddetail');
});

Route::get('/viewdetail', function () {
    return view('admin/butuh/viewdetail');
});

Route::get('/removedetail', function () {
    return view('admin/butuh/removedetail');
});

Route::get('/editdetail', function () {
    return view('admin/butuh/editdetail');
});

Route::get('/brawijaya', function () {
    return view('lokasi\brawijaya');
});

Route::get('/bunda', function () {
    return view('lokasi\bunda');
});

Route::get('/darmahusada', function () {
    return view('lokasi\darmahusada');
});

Route::get('/rsua', function () {
    return view('lokasi\rsua');
});

Route::get('/sutomo', function () {
    return view('lokasi\sutomo');
});

Route::get('suwandi', function () {
    return view('lokasi\suwandi');
});