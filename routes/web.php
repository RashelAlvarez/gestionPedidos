<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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


Route::get('/', 'InicioController@index' );
Route::get('catalogo', 'CatalogoController@index' )->name('catalogo');
 
Route::get('productos', 'ProductosController@index' );
Route::get('login', 'LoginController@showLoginForm' );



 Route::resource('detalle', 'DetalleController');

Auth::routes();



Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Route::resource('/usuarios', 'UsuarioController');

Route::resource('/clientes', 'ClientesController');

Route::resource('/productad', 'ProductAdController');
Route::get('/productad/{productad}/mostrarProductos', 'ProductAdController@mostrarProductos')->name('mostrarProductos');

Route::post('/cart/add', 'CartController@add')->name('cart.add');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
Route::post('/cart/remove', 'CartController@removeitem')->name('cart.removeitem');
Route::post('/cart/clear', 'CartController@clear')->name('cart.clear');

Route::resource('/pedidos', 'PedidosController');
Route::post('/pedidosvendedor', 'PedidosVendedorController@store')->name('pedidosvendedor.store');

Route::get('/pedidos/{pedido}/mostrarOrden', 'PedidosController@mostrarOrden')->name('mostrarOrden');

Route::resource('/vendedor', 'VendedorController');
Route::resource('/costos', 'CostosController');
Route::get('/usuarios/{getrole}/getrole', 'UsuarioController@getrole')->name('getrole');

 