<?php

use Illuminate\Support\Facades\Route;

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
// use App\Models\Image;
// use App\Models\Like;

Route::get('/', function () {
    // $images = Image::all();
    // foreach($images as $image){
    //     echo $image->image_path ."<br>";
    //     echo $image->descripcion."<br>";
    //     echo $image->user->name. ' ' . $image->user->surname . "<br>";

    //     if(count($image->comments) >= 1){
    //         echo "<h4>Comentarios</h4>";
    //         foreach($image->comments as $comment){
    //             echo $comment->content . '<br>';
    //         }
    //     }

    //     echo 'Likes: ' . count($image->likes) . '<br>' .'<br>';
    // }

    // die();
    return view('index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/configuracion', [\App\Http\Controllers\UserController::class, 'config'])->name('config');

Route::post('user/update', [\App\Http\Controllers\UserController::class, 'update'])->name('user.update');

Route::get('/user/avatar/{filename}', [\App\Http\Controllers\UserController::class, 'getImage'])->name('user.avatar');

Route::get('/subir-imagen', [\App\Http\Controllers\ImageController::class, 'create'])->name('image.create');

Route::post('image/save', [\App\Http\Controllers\ImageController::class, 'save'])->name('image.save');

Route::get('/image/file/{filename}', [\App\Http\Controllers\ImageController::class, 'getImage'])->name('image.file');
