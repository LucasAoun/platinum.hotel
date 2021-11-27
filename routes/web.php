<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cms\HomeController;
use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

//CMS
Route::get('cms/home', [HomeController::class, 'index'])->name('cms.home');


//WEB
Route::get('/', [WebController::class, 'home'])->name('web.home');
Route::get('/register', [WebController::class, 'register'])->name('web.register');
Route::post('/register', [WebController::class, 'storeRegister'])->name('web.storeRegister');
Route::get('/sobre-nos', [WebController::class, 'sobreNos'])->name('web.sobreNos');
Route::get('/contato', [WebController::class, 'contato'])->name('web.contato');
Route::get('/acomodacao', [WebController::class, 'acomodacao'])->name('web.acomodacao');
Route::get('/acomodacao/{quarto}', [WebController::class, 'acomodacaoDetail'])->name('web.acomodacaoDetail');
Route::get('/login', [WebController::class, 'login'])->name('web.login');
Route::get('/acomodacao/{quarto}/pagamento', [WebController::class, 'pagamentoReserva'])->name('web.pagamentoReserva');
Route::post('/login', [WebController::class, 'storeLogin'])->name('web.storeLogin');
