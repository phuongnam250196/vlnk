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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace'=>'Frontend'], function() {
	Route::get('/', 'FrontendsController@getHome');
	Route::get('/contact', 'FrontendsController@getContact');
	Route::post('/contact', 'FrontendsController@postContact');
	Route::group(['prefix'=>'videos'], function() {
		Route::get('/', 'FrontendsController@getVideos');
		Route::get('/search/', 'FrontendsController@getVideosSearch');
		Route::get('/category/{slug}', 'FrontendsController@getVideosCategorySlug');
		Route::get('/{slug}', 'FrontendsController@getVideosDetailSlug');
	});
	Route::group(['prefix'=>'news'], function() {
		Route::get('/', 'FrontendsController@getNews');
		Route::get('/search/', 'FrontendsController@getNewsSearch');
		Route::get('/category/{slug}', 'FrontendsController@getNewsDetailCategorySlug');
		Route::get('/{slug}', 'FrontendsController@getNewsDetailSlug');
	});
	Route::get('/category/{slug}', 'FrontendsController@getCategorySlug');
	Route::get('/product/{slug}', 'FrontendsController@getProductDetail');
	Route::get('/agency', 'FrontendsController@getAgency');
	Route::get('/support', 'FrontendsController@getSupport');
	Route::get('/search', 'FrontendsController@getSearch');
	Route::get('/account', 'FrontendsController@getAccount');
	Route::get('/register', 'FrontendsController@getRegister');
	Route::post('/register', 'FrontendsController@postRegister');
	Route::get('/pay', 'FrontendsController@getPays');
	Route::get('/cart', 'FrontendsController@getCarts');

});

Route::group(['namespace'=>'Backend'], function() {
	Route::group(['prefix'=>'admin'], function() {
		Route::get('/', 'HomesController@getAdminHome');
		Route::get('/profile', 'HomesController@getProfile');
		Route::post('/profile', 'HomesController@postProfile');

		Route::group(['prefix'=>'account'], function() {
			Route::get('/', 'AccountsController@getAccount');
		});

		Route::group(['prefix'=>'category'], function() {
			Route::get('/', 'CategoriesController@getCategory');
			Route::get('/list_parent', 'CategoriesController@listParentCategories');
			Route::post('/add', 'CategoriesController@addCategory');
			Route::post('/del', 'CategoriesController@delCate');
		});

		Route::group(['prefix'=>'product'], function() {
			Route::get('/', 'ProductsController@getProduct');
			Route::get('/add', 'ProductsController@getAddProduct');
			Route::post('/add', 'ProductsController@postAddProduct');
			Route::get('/update/{id}', 'ProductsController@getUpdateProduct');
			Route::post('/update/{id}', 'ProductsController@postUpdateProduct');
			Route::post('/upload', 'ProductsController@uploadImgProduct');
			Route::post('/del', 'ProductsController@postDeleteProducts');
		});

		Route::group(['prefix'=>'post'], function() {
			Route::get('/', 'PostsController@getPosts');
			Route::get('/add', 'PostsController@getAddPosts');
			Route::post('/add', 'PostsController@postAddPosts');
			Route::get('/update/{id}', 'PostsController@getUpdatePosts');
			Route::post('/update/{id}', 'PostsController@postUpdatePosts');
			Route::post('/del', 'PostsController@postDeletePosts');
		});

		Route::group(['prefix'=>'video'], function() {
			Route::get('/', 'VideosController@getVideos');
			Route::get('/add', 'VideosController@getAddVideos');
			Route::post('/add', 'VideosController@postAddVideos');
			Route::get('/update/{id}', 'VideosController@getUpdateVideos');
			Route::post('/update/{id}', 'VideosController@postUpdateVideos');
			Route::post('/del', 'VideosController@postDeleteVideos');
		});

		Route::group(['prefix'=>'contact'], function() {
			Route::get('/', 'ContactsController@getContacts');
		});

		Route::group(['prefix'=>'setting'], function() {
			Route::get('/', 'SettingsController@getSetting');
		});
	});
});
