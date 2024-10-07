<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\SmartController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\CameraController;
use App\Http\Controllers\LaptopsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

// Route::get('/', function () {
//     return view('index');
// });



Route::get('welcome', function () {
    return view('welcome'); // تأكد من وجود عرض باسم welcome
});

// عمليات تسجيل الدخول
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

// عمليات التسجيل
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('/register', [RegisteredUserController::class, 'store']);
});

// عمليات تسجيل الخروج
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('/profile', [ProfileController::class, 'show'])
        ->name('profile.show');
});

// // توجيه الصفحة الرئيسية بعد تسجيل الدخول
// Route::middleware('auth')->get('/dashboard', function () {
//     return view('dashboard'); // تأكد من وجود عرض باسم dashboard
// })->name('dashboard');







Route::get('product', function () {
    return view('product');
});


Route::get('about', function () {
    $users = DB::table('smartphone')->get();
    $items = DB::table('camera')->get();

    return view('about', ['users' => $users], ['items' => $items]);
});

Route::get('navend', function () {

    $users = DB::table('smartphone')->get();
    $items = DB::table('camera')->get();

    return view('navend', ['users' => $users], ['items' => $items]);
});

Route::get('store', function () {
    $users = DB::table('smartphone')->get();
    $items = DB::table('camera')->get();

    return view('store', ['users' => $users], ['items' => $items]);
});

Route::get('checkout', function () {
    $users = DB::table('smartphone')->get();
    $items = DB::table('camera')->get();

    return view('checkout', ['users' => $users], ['items' => $items]);
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('edit', function () {
    return view('edit');
});

Route::get('laptop', function () {
    $posts = DB::table('loptops')->get();
    $users = DB::table('smartphone')->get();
    $items = DB::table('camera')->get();
    return view('laptop', [
        'posts' => $posts,
        'users' => $users,
        'items' => $items,

    ]);
});


Route::get('car', function () {
    $items = DB::table('camera')->get();
    $users = DB::table('smartphone')->get();
    $car = DB::table('car')->get();
    return view('car', [
        'items' => $items,
        'users' => $users,
        'car' => $car,


    ]);
});

Route::get('smartphone', function () {
    $users = DB::table('smartphone')->get();
    $items = DB::table('camera')->get();
    return view('smartphone', [
        'users' => $users,
        'items' => $items,

    ]);
});

Route::get('camera', function () {
    $users = DB::table('smartphone')->get();
    $items = DB::table('camera')->get();
    return view('camera', [
        'users' => $users,
        'items' => $items,

    ]);
});

Route::get('access', function () {
    $posts = DB::table('loptops')->get();
    $users = DB::table('smartphone')->get();
    $items = DB::table('camera')->get();
    $access = DB::table('access')->get();

    return view('access', [
        'posts' => $posts,
        'users' => $users,
        'items' => $items,
        'access' => $access,

    ]);
});

Route::get('navbar', function () {
    $users = DB::table('smartphone')->get();
    $items = DB::table('camera')->get();

    return view('navbar', ['users' => $users], ['items' => $items]);
});

Route::get('Categories', function () {
    $posts = DB::table('loptops')->get();
    $users = DB::table('smartphone')->get();
    $items = DB::table('camera')->get();
    $access = DB::table('access')->get();
    $car = DB::table('car')->get();


    return view('Categories', [
        'posts' => $posts,
        'users' => $users,
        'items' => $items,
        'access' => $access,
        'car' => $car,

    ]);
});

Route::get('/', function () {
    $posts = DB::table('loptops')->get();
    $users = DB::table('smartphone')->get();
    $items = DB::table('camera')->get();
    $access = DB::table('access')->get();
    $car = DB::table('car')->get();


    return view('index', [
        'posts' => $posts,
        'users' => $users,
        'items' => $items,
        'access' => $access,
        'car' => $car,


    ]);
});

Route::get('productcamera/{id}', function () {

    $users = DB::table('smartphone')->get();
    $items = DB::table('camera')->get();

    return view('productcamera', ['users' => $users], ['items' => $items]);
});


Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/productcamera/{id}', [ProductController::class, 'store'])->name('productcamera.show');
Route::get('/productcar/{id}', [ProductController::class, 'one'])->name('productcar.show');

Route::get('/productsmart/{id}', [ProductController::class, 'index'])->name('productcam.show');
Route::get('/productaccess/{id}', [ProductController::class, 'edit'])->name('productaccess.show');


// Route::get(show)


// Route::get('product', function () {
//     $posts = DB::table('loptops')->get();
//     $users = DB::table('smartphone')->get();
//     $items = DB::table('camera')->get();
//     $access = DB::table('access')->get();


//     return view('product', [
//         'posts' => $posts,
//         'users' => $users,
//         'items' => $items,
//         'access' => $access,
//     ]);
// });

Route::get('check', function () {
    $check = DB::table('checkout')->get();
    return view('check', ['check' => $check]);
});

Route::get('access', function () {
    $access = DB::table('access')->get();
    return view('access', ['access' => $access]);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('library', function () {
    return view('folder.library');
});

Route::get('email', [EmailController::class, 'store']);
Route::get('email/create', [EmailController::class, 'create']);
/**
 * unnamed
 */
Route::post('email/insert', [EmailController::class, 'insert'])->middleware('check_user');


// access
Route::get('access/index', [AccessController::class, 'index']);
Route::get('access/create', [AccessController::class, 'create']);
Route::get('access/edit/{id}', [AccessController::class, 'edit']);
Route::get('access/show/{id}', [AccessController::class, 'show']);
Route::post('access/update/{id}', [AccessController::class, 'update']);
Route::post('access/insert', [AccessController::class, 'insert']);
Route::get('access/delete/{id}', [AccessController::class, 'delete']);


// laptops
Route::get('laptop/index', [LaptopsController::class, 'index'])->name('laptop.index');
Route::get('laptop/create', [LaptopsController::class, 'create'])->name('laptop.create');
Route::get('laptop/edit/{id}', [LaptopsController::class, 'edit'])->name('laptop.edit');
Route::get('laptop/show/{id}', [LaptopsController::class, 'show'])->name('laptop.show');
Route::post('laptop/update/{id}', [LaptopsController::class, 'update'])->name('laptop.update');
Route::post('laptop/insert', [LaptopsController::class, 'insert'])->name('laptop.insert');
Route::get('laptop/delete/{id}', [LaptopsController::class, 'delete'])->name('laptop.delete');


// camera
Route::get('camera/index', [CameraController::class, 'index']);
Route::get('camera/create', [CameraController::class, 'create']);
Route::get('camera/edit/{id}', [CameraController::class, 'edit']);
Route::get('camera/show/{id}', [CameraController::class, 'show']);
Route::post('camera/update/{id}', [CameraController::class, 'update']);
Route::post('camera/insert', [CameraController::class, 'insert']);
Route::get('camera/delete/{id}', [CameraController::class, 'delete']);

// smartphone
Route::get('smart/index', [SmartController::class, 'index']);
Route::get('smart/create', [SmartController::class, 'create']);
Route::get('smart/edit/{id}', [SmartController::class, 'edit']);
Route::get('smart/show/{id}', [SmartController::class, 'show']);
Route::post('smart/update/{id}', [SmartController::class, 'update']);
Route::post('smart/insert', [SmartController::class, 'insert']);
Route::get('smart/delete/{id}', [SmartController::class, 'delete']);


// cars
Route::get('car/index', [CarController::class, 'index']);
Route::get('car/create', [CarController::class, 'create']);
Route::get('car/edit/{id}', [CarController::class, 'edit']);
Route::get('car/show/{id}', [CarController::class, 'show']);
Route::post('car/update/{id}', [CarController::class, 'update']);
Route::post('car/insert', [CarController::class, 'insert']);
Route::get('car/delete/{id}', [CarController::class, 'delete']);


//checkout
Route::get('check/create', [CheckoutController::class, 'create']);
Route::post('check/insert', [CheckoutController::class, 'insert']);
