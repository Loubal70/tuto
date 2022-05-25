<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Auth::routes();

Auth::routes();

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/languageDemo', [HomeController::class, 'languageDemo'])->name('languageDemo');
});


/*
* Route Cours
*/

Route::get('/', function () {
    return view('dashboard');
})->name('home');

Route::get('/getting_started', function () {
    return view('cours.1-getting-started');
})->name('getting_started');

Route::get('/ce_nest_pas_le_lien_de_lactivite_2', function () {
    $exercice = DB::select('select * from exercices where id = ?', [1]);
    if( $exercice[0]->allow == 1 ) return view('cours.2-activite2');

    return back();
    
})->name('activite2');

Route::get('/ce_nest_pas_le_lien_de_lactivite_2/answers', function () {
    $exercice = DB::select('select * from exercices where id = ?', [1]);
    if( $exercice[0]->allow == 1 ) return view('cours.2-activite2-reponse');

    return back(); 
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        $exercices = DB::select('SELECT * FROM exercices') ;
        return view('admin.dashboard', ['exercices' => $exercices]);
    })->name('admin');

    Route::get('/active/{id}', function ($id) {
        DB::update('update exercices set allow = 1 where id = ?', [$id]);
        return back();
    })->name('active');

    Route::get('/desactive/{id}', function ($id) {
        DB::update('update exercices set allow = 0 where id = ?', [$id]);
        return back();
    })->name('desactive');
});