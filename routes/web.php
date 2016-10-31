<?php


Auth::routes();

Route::get('/', 'HomeController@index');

Route::resource('products', 'ProductController');

Route::resource('news', 'NewsController');


Route::post('products/upload', ['as' => 'products.upload', 'uses' => 'ProductController@upload']);

Route::resource('productImages', 'ProductImagesController');


//Route::group(['middleware' => ['auth', 'permission:ADMIN_PANEL']], function () {
//    /* ================== Dashboard ================== */
//    Route::get('admin', 'Back\DashboardController@index');
//});


Route::get('admin', 'Back\DashBoardController@index');

Route::get('admin/news', ['as'=> 'admin.news.index', 'uses' => 'NewsController@index']);
Route::post('admin/news', ['as'=> 'admin.news.store', 'uses' => 'NewsController@store']);
Route::get('admin/news/create', ['as'=> 'admin.news.create', 'uses' => 'NewsController@create']);
Route::put('admin/news/{news}', ['as'=> 'admin.news.update', 'uses' => 'NewsController@update']);
Route::patch('admin/news/{news}', ['as'=> 'admin.news.update', 'uses' => 'NewsController@update']);
Route::delete('admin/news/{news}', ['as'=> 'admin.news.destroy', 'uses' => 'NewsController@destroy']);
Route::get('admin/news/{news}', ['as'=> 'admin.news.show', 'uses' => 'NewsController@show']);
Route::get('admin/news/{news}/edit', ['as'=> 'admin.news.edit', 'uses' => 'NewsController@edit']);


Route::get('admin/cities', ['as'=> 'admin.cities.index', 'uses' => 'CityController@index']);
Route::post('admin/cities', ['as'=> 'admin.cities.store', 'uses' => 'CityController@store']);
Route::get('admin/cities/create', ['as'=> 'admin.cities.create', 'uses' => 'CityController@create']);
Route::put('admin/cities/{cities}', ['as'=> 'admin.cities.update', 'uses' => 'CityController@update']);
Route::patch('admin/cities/{cities}', ['as'=> 'admin.cities.update', 'uses' => 'CityController@update']);
Route::delete('admin/cities/{cities}', ['as'=> 'admin.cities.destroy', 'uses' => 'CityController@destroy']);
Route::get('admin/cities/{cities}', ['as'=> 'admin.cities.show', 'uses' => 'CityController@show']);
Route::get('admin/cities/{cities}/edit', ['as'=> 'admin.cities.edit', 'uses' => 'CityController@edit']);


Route::get(config('laraadmin.adminRoute') . '/course_dt_ajax', 'CityController@dtajax');


Route::get('admin/images', ['as'=> 'admin.images.index', 'uses' => 'ImageController@index']);
Route::post('admin/images', ['as'=> 'admin.images.store', 'uses' => 'ImageController@store']);
Route::get('admin/images/create', ['as'=> 'admin.images.create', 'uses' => 'ImageController@create']);
Route::put('admin/images/{images}', ['as'=> 'admin.images.update', 'uses' => 'ImageController@update']);
Route::patch('admin/images/{images}', ['as'=> 'admin.images.update', 'uses' => 'ImageController@update']);
Route::delete('admin/images/{images}', ['as'=> 'admin.images.destroy', 'uses' => 'ImageController@destroy']);
Route::get('admin/images/{images}', ['as'=> 'admin.images.show', 'uses' => 'ImageController@show']);
Route::get('admin/images/{images}/edit', ['as'=> 'admin.images.edit', 'uses' => 'ImageController@edit']);


Route::get('admin/testDatatablesBogdans', ['as'=> 'admin.testDatatablesBogdans.index', 'uses' => 'TestDatatablesBogdanController@index']);
Route::post('admin/testDatatablesBogdans', ['as'=> 'admin.testDatatablesBogdans.store', 'uses' => 'TestDatatablesBogdanController@store']);
Route::get('admin/testDatatablesBogdans/create', ['as'=> 'admin.testDatatablesBogdans.create', 'uses' => 'TestDatatablesBogdanController@create']);
Route::put('admin/testDatatablesBogdans/{testDatatablesBogdans}', ['as'=> 'admin.testDatatablesBogdans.update', 'uses' => 'TestDatatablesBogdanController@update']);
Route::patch('admin/testDatatablesBogdans/{testDatatablesBogdans}', ['as'=> 'admin.testDatatablesBogdans.update', 'uses' => 'TestDatatablesBogdanController@update']);
Route::delete('admin/testDatatablesBogdans/{testDatatablesBogdans}', ['as'=> 'admin.testDatatablesBogdans.destroy', 'uses' => 'TestDatatablesBogdanController@destroy']);
Route::get('admin/testDatatablesBogdans/{testDatatablesBogdans}', ['as'=> 'admin.testDatatablesBogdans.show', 'uses' => 'TestDatatablesBogdanController@show']);
Route::get('admin/testDatatablesBogdans/{testDatatablesBogdans}/edit', ['as'=> 'admin.testDatatablesBogdans.edit', 'uses' => 'TestDatatablesBogdanController@edit']);


Route::get('admin/projects', ['as'=> 'admin.projects.index', 'uses' => 'Back\ProjectController@index']);
Route::post('admin/projects', ['as'=> 'admin.projects.store', 'uses' => 'Back\ProjectController@store']);
Route::get('admin/projects/create', ['as'=> 'admin.projects.create', 'uses' => 'Back\ProjectController@create']);
Route::put('admin/projects/{projects}', ['as'=> 'admin.projects.update', 'uses' => 'Back\ProjectController@update']);
Route::patch('admin/projects/{projects}', ['as'=> 'admin.projects.update', 'uses' => 'Back\ProjectController@update']);
Route::delete('admin/projects/{projects}', ['as'=> 'admin.projects.destroy', 'uses' => 'Back\ProjectController@destroy']);
Route::get('admin/projects/{projects}', ['as'=> 'admin.projects.show', 'uses' => 'Back\ProjectController@show']);
Route::get('admin/projects/{projects}/edit', ['as'=> 'admin.projects.edit', 'uses' => 'Back\ProjectController@edit']);


Route::get('admin/yous', ['as'=> 'admin.yous.index', 'uses' => 'Back\YouController@index']);
Route::post('admin/yous', ['as'=> 'admin.yous.store', 'uses' => 'Back\YouController@store']);
Route::get('admin/yous/create', ['as'=> 'admin.yous.create', 'uses' => 'Back\YouController@create']);
Route::put('admin/yous/{yous}', ['as'=> 'admin.yous.update', 'uses' => 'Back\YouController@update']);
Route::patch('admin/yous/{yous}', ['as'=> 'admin.yous.update', 'uses' => 'Back\YouController@update']);
Route::delete('admin/yous/{yous}', ['as'=> 'admin.yous.destroy', 'uses' => 'Back\YouController@destroy']);
Route::get('admin/yous/{yous}', ['as'=> 'admin.yous.show', 'uses' => 'Back\YouController@show']);
Route::get('admin/yous/{yous}/edit', ['as'=> 'admin.yous.edit', 'uses' => 'Back\YouController@edit']);


Route::get('admin/aes', ['as'=> 'admin.aes.index', 'uses' => 'Back\AeController@index']);
Route::post('admin/aes', ['as'=> 'admin.aes.store', 'uses' => 'Back\AeController@store']);
Route::get('admin/aes/create', ['as'=> 'admin.aes.create', 'uses' => 'Back\AeController@create']);
Route::put('admin/aes/{aes}', ['as'=> 'admin.aes.update', 'uses' => 'Back\AeController@update']);
Route::patch('admin/aes/{aes}', ['as'=> 'admin.aes.update', 'uses' => 'Back\AeController@update']);
Route::delete('admin/aes/{aes}', ['as'=> 'admin.aes.destroy', 'uses' => 'Back\AeController@destroy']);
Route::get('admin/aes/{aes}', ['as'=> 'admin.aes.show', 'uses' => 'Back\AeController@show']);
Route::get('admin/aes/{aes}/edit', ['as'=> 'admin.aes.edit', 'uses' => 'Back\AeController@edit']);
