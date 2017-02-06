<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('trang-chu',[
	'as'=>'trangchu',
	'uses'=>'HomeController@index'
	]);
Route::get('sanpham','ProductController@index');
// Route::get('giohang',['as'=>'add_to','uses'=>'ShoppingCartController@index']);
Route::get('add-to-cart/{id}',['as'=>'add_to','uses'=>'ShoppingCartController@getAddToCart']);
Route::get('gio-hang',['as'=>'giohang','uses'=>'ShoppingCartController@giohang']);
Route::get('xoa-sanpham/{id}',['as'=>'xoasanpham','uses'=>'ShoppingCartController@xoasanpham']);
Route::get('cap-nhat/{id}/{qty}',['as'=>'capnhat','uses'=>'ShoppingCartController@capnhat']);
Route::get('checkout',['as'=>'checkout','uses'=>'ShoppingCartController@checkout']);

Route::post('checkout',[
	'uses'	=>	'ShoppingCartController@postCheckout',
	'as'	=>  'checkout'
	]);

Auth::routes();
Route::resource('chitietsanpham','SingleController');
Route::resource('contact','ContactController');

Route::get('/home', 'HomeController@show');

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('admin-view',[

	'as'=>'adminView',
	'uses'=>'AdminController@show'

	]);

// Route::get('form/logina','LoginController@index');
// Route::post('/form/loginMe','LoginController@login');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	Route::get('/', ['as' => 'admin-home', 'uses' => 'AdminController@index']);
	Route::post('categories/delete-multi', ['as' =>'categories.destroy.multi', 'uses' => 'CategoriesController@destroyMulti']);

	Route::post('products/delete-multi', ['as' =>'products.destroy.multi', 'uses' => 'ProductsController@destroyMulti']);

	Route::post('customers/delete-multi', ['as' =>'customers.destroy.multi', 'uses' => 'CustomersController@destroyMulti']);

	Route::post('size/delete-multi', ['as' =>'size.destroy.multi', 'uses' => 'SizeController@destroyMulti']);

	Route::post('groups/delete-multi', ['as' =>'groups.destroy.multi', 'uses' => 'GroupsController@destroyMulti']);

	Route::post('userstable/delete-multi', ['as' =>'userstable.destroy.multi', 'uses' => 'UserstableController@destroyMulti']);

	Route::post('profiles/delete-multi', ['as' =>'profiles.destroy.multi', 'uses' => 'ProfilesController@destroyMulti']);

	Route::post('blog/delete-multi', ['as' =>'blog.destroy.multi', 'uses' => 'BlogController@destroyMulti']);

	Route::post('blog_category/delete-multi', ['as' =>'blog_category.destroy.multi', 'uses' => 'BlogCategoryController@destroyMulti']);
	
	Route::resource('categories','CategoriesController');
	Route::resource('products','ProductsController');
	Route::resource('productsdetails','ProductdetailsController');
	Route::resource('customers','CustomersController');
	Route::resource('size','SizeController');
	Route::resource('groups','GroupsController');
	Route::resource('userstable','UserstableController');
	Route::resource('profiles','ProfilesController');
	Route::resource('blog','BlogController');
	Route::resource('blog_category','BlogCategoryController');
	Route::resource('profile','UserController');
	// Route::resource('admin','AdminController');
});

Route::get('admin/logout',function(){
	session(['name' => '']);
});




