<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'welcomeControler@index');
Route::get('/contact', 'welcomeControler@contact');
Route::get('/category-view/{id}', 'welcomeControler@categoryContent');
Route::get('/products-details/{id}', 'welcomeControler@productdetails');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/dashbord', 'HomeController@index');

// add to cart
Route::post('/add-to-cart', 'cartController@addTocart');
Route::get('/cart/show', 'cartController@cartshow');
Route::get('/cart/delete/{id}', 'cartController@cartdelete');
Route::post('/cart/update', 'cartController@cartupdate');
Route::get('/checkout', 'cartController@checkout');
// end add to cart

Route::post('/customer/registration', 'chackoutController@registration');
Route::get('/checkout/shipping', 'chackoutController@shippingForm');
Route::post('/cheakout/payment', 'chackoutController@customerpayment');
Route::get('/customer/paymentinfo', 'chackoutController@paymentinfo');
Route::post('/customer-login', 'chackoutController@customerlogin');






Route::group(['middleware'=>'AuthenticatMiddlwware'],function(){

// category info
Route::get('/category/add', 'categoryController@createCategory');

Route::post('/category/save', 'categoryController@storCategory');

Route::get('/category/manage', 'categoryController@manageCategory');
Route::get('/category/edit/{id}', 'categoryController@editCategory');
Route::post('/category/update', 'categoryController@updateCategory');
Route::get('/category/delete/{id}', 'categoryController@deleteCategory');

// end category

// menufracturer info

Route::get('/menufracturer/add', 'menufracturerController@createMenufracturer');

 Route::post('/Menufracturer/save', 'menufracturerController@storeMenufracturer');

Route::get('/menufracturer/manage', 'menufracturerController@manageMenufracturer');
 Route::get('/menufracturer/edit/{id}', 'menufracturerController@editMenufracturer');
Route::post('/menufracturer/update', 'menufracturerController@updateMenufracturer');
Route::get('/menufracturer/delete/{id}', 'menufracturerController@deleteMenufracturer');

// end menufracturer 

// prodauct info

Route::get('/product/add', 'prodauctController@createMProduct');

 Route::post('/product/save', 'prodauctController@storeProduct');

Route::get('/product/manage', 'prodauctController@manageProduct');
Route::get('/product/show/{id}', 'prodauctController@showProduct');
 Route::get('/product/edit/{id}', 'prodauctController@editProduct');
Route::post('/product/update', 'prodauctController@updateProduct');
Route::get('/product/delete/{id}', 'prodauctController@deleteProduct');
// endprodauct info

});
