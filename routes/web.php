<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::get('/', function () {
    return View('home' , [
        "title" => "Home"
    ]); // menampilkan halaman view
});

Route::get('/about', function () {
    return View('about', [
        "title" => "About",
        "nama" => "Gugus Pradita",
        "email" => "guguspradita19@gmail.com",
        "image" => "ggs.jpg"
    ]); // menampilkan halaman view dan mengirim data
});

Route::get('/blog', [PostController::class, 'index']); // menampilkan data dari model Post

// halaman single posts
Route::get('/blog/{slug}', [PostController::class, 'show']);

// Route::get('/mahasiswa' , function () {
//     $arrMhs = [
//         "Gugus Pradita",
//         "Ryan Ardiansyah",
//         "Choirul Adam",
//         "M. Zidane"
//     ];
//     return View('universitas/mahasiswa', ["mahasiswa" => $arrMhs]);
// });

// Route::get('mahasiswa/{nama}/{umur}/{kotaAsal}',
//     function ($nama, $umur, $asalKota) {
//         // Setiap segmen dari URL akan ditampung oleh variabel $nama, $umur dan $kotaAsal
//         return View('universitas/mahasiswa') // menampilkan view mahasiswa di dalam folder universitas
//         ->with('nama', $nama)
//         ->with('umur', $umur)
//         ->with('kotaAsal', $asalKota);
// });
