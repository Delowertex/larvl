<?php


use App\Http\Controllers\SessionController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MailController;
use App\PaymentGateway\Payment;


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

Route::get('/', function(){
    return view('welcome');
});



Route::get('/', [ProductController::class, 'index'])->name('product.index');

Route::get('/post', [PostController::class, 'getAllPost'])->name('post.getallpost');

Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/posts', [ClientController::class, 'getAllPost'])->name('post.getallpost');

Route::get('/fluent', [FluentController::class, 'index'])->name('fluent.index');

Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('checkuser');

Route::get('/loginsubmit', [LoginController::class, 'loginSubmit'])->name('login.submit');

Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('session.get');

Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.store');

Route::get('/session/remove', [SessionController::class, 'deleteSessionData'])->name('session.delete');

Route::get('/all-post', [PostController::class, 'getAllPost'])->name('posts.getallpost');

Route::get('/add-post', [PostController::class, 'addPost'])->name('posts.addpost');

Route::post('/add-post', [PostController::class, 'addPostSubmit'])->name('posts.addpostsubmit');

Route::get('/posts/{id}', [PostController::class, 'getPostById'])->name('posts.getbyid');

Route::get('/delete-post/{id}', [PostController::class, 'deletePost'])->name('posts.delet');

Route::get('/edit-post/{id}', [PostController::class, 'editPost'])->name('posts.editpost');

Route::post('/update-post', [PostController::class, 'updatePost'])->name('post.update');

Route::get('/inner-join', [PostController::class, 'innerJoinClause'])->name('join.innerjoin');

Route::get('/left-join', [PostController::class, 'leftJoinClause'])->name('join.leftjoin');

Route::get('/right-join', [PostController::class, 'rightJoinClause'])->name('join.rightjoin');

Route::get('/all-post', [PostController::class, 'getAllPostUsingModel'])->name('all.post');

Route::get('/test', function(){
    return view('test');
});

Route::get('/homeee', function(){
    return view('index');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/users', [PaginationController::class, 'allUsers'])->name('users.paginate');

Route::get('/upload', [UploadController::class, 'uploadForm'])->name('upload');

Route::post('/upload', [UploadController::class, 'uploadFIle'])->name('upload.file');

Route::get('/payment', function(){
    return Payment::process();
});

Route::get('/send-mail', [MailController::class, 'sendEmail']);