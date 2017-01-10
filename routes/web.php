<?php

//$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
//$this->post('login', 'Auth\LoginController@login');
//$this->post('logout', 'Auth\LoginController@logout')->name('logout');
//
//// Registration Routes...
//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//$this->post('register', 'Auth\RegisterController@register');
//
//// Password Reset Routes...
//$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
//$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
//$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
//$this->post('password/reset', 'Auth\ResetPasswordController@reset');



Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();

//Route::get('/{lang}', 'HomeController@index');
Route::get('/', ['as' => '/home', 'uses' => 'HomeController@index']);

Route::resource('products', 'ProductController');

Route::resource('news', 'NewsController');


Route::post('products/upload', ['as' => 'products.upload', 'uses' => 'ProductController@upload']);

Route::resource('productImages', 'ProductImagesController');


//Route::group(['middleware' => ['auth', 'permission:ADMIN_PANEL']], function () {
//    /* ================== Dashboard ================== */
//    Route::get('admin', 'Back\DashboardController@index');
//});


Route::get('admin', 'Back\DashBoardController@index');


Route::get('admin/cities', ['as'=> 'admin.cities.index', 'uses' => 'CityController@index']);
Route::post('admin/cities', ['as'=> 'admin.cities.store', 'uses' => 'CityController@store']);
Route::get('admin/cities/create', ['as'=> 'admin.cities.create', 'uses' => 'CityController@create']);
Route::put('admin/cities/{cities}', ['as'=> 'admin.cities.update', 'uses' => 'CityController@update']);
Route::patch('admin/cities/{cities}', ['as'=> 'admin.cities.update', 'uses' => 'CityController@update']);
Route::delete('admin/cities/{cities}', ['as'=> 'admin.cities.destroy', 'uses' => 'CityController@destroy']);
Route::get('admin/cities/{cities}', ['as'=> 'admin.cities.show', 'uses' => 'CityController@show']);
Route::get('admin/cities/{cities}/edit', ['as'=> 'admin.cities.edit', 'uses' => 'CityController@edit']);


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
Route::delete('admin/aes/{aes}/deleteImage', ['as'=> 'admin.aes.deleteImage', 'uses' => 'Back\AeController@deleteImage']);





Route::get('admin/families', ['as'=> 'admin.families.index', 'uses' => 'Back\FamilyController@index']);
Route::post('admin/families', ['as'=> 'admin.families.store', 'uses' => 'Back\FamilyController@store']);
Route::get('admin/families/create', ['as'=> 'admin.families.create', 'uses' => 'Back\FamilyController@create']);
Route::put('admin/families/{families}', ['as'=> 'admin.families.update', 'uses' => 'Back\FamilyController@update']);
Route::patch('admin/families/{families}', ['as'=> 'admin.families.update', 'uses' => 'Back\FamilyController@update']);
Route::delete('admin/families/{families}', ['as'=> 'admin.families.destroy', 'uses' => 'Back\FamilyController@destroy']);
Route::get('admin/families/{families}', ['as'=> 'admin.families.show', 'uses' => 'Back\FamilyController@show']);
Route::get('admin/families/{families}/edit', ['as'=> 'admin.families.edit', 'uses' => 'Back\FamilyController@edit']);


Route::get('admin/familyImages', ['as'=> 'admin.familyImages.index', 'uses' => 'Back\FamilyImagesController@index']);
Route::post('admin/familyImages', ['as'=> 'admin.familyImages.store', 'uses' => 'Back\FamilyImagesController@store']);
Route::get('admin/familyImages/create', ['as'=> 'admin.familyImages.create', 'uses' => 'Back\FamilyImagesController@create']);
Route::put('admin/familyImages/{familyImages}', ['as'=> 'admin.familyImages.update', 'uses' => 'Back\FamilyImagesController@update']);
Route::patch('admin/familyImages/{familyImages}', ['as'=> 'admin.familyImages.update', 'uses' => 'Back\FamilyImagesController@update']);
Route::delete('admin/familyImages/{familyImages}', ['as'=> 'admin.familyImages.destroy', 'uses' => 'Back\FamilyImagesController@destroy']);
Route::get('admin/familyImages/{familyImages}', ['as'=> 'admin.familyImages.show', 'uses' => 'Back\FamilyImagesController@show']);
Route::get('admin/familyImages/{familyImages}/edit', ['as'=> 'admin.familyImages.edit', 'uses' => 'Back\FamilyImagesController@edit']);



Route::get('admin/news', ['as'=> 'admin.news.index', 'uses' => 'Back\NewsController@index']);
Route::post('admin/news', ['as'=> 'admin.news.store', 'uses' => 'Back\NewsController@store']);
Route::get('admin/news/create', ['as'=> 'admin.news.create', 'uses' => 'Back\NewsController@create']);
Route::put('admin/news/{news}', ['as'=> 'admin.news.update', 'uses' => 'Back\NewsController@update']);
Route::patch('admin/news/{news}', ['as'=> 'admin.news.update', 'uses' => 'Back\NewsController@update']);
Route::delete('admin/news/{news}', ['as'=> 'admin.news.destroy', 'uses' => 'Back\NewsController@destroy']);
Route::get('admin/news/{news}', ['as'=> 'admin.news.show', 'uses' => 'Back\NewsController@show']);
Route::get('admin/news/{news}/edit', ['as'=> 'admin.news.edit', 'uses' => 'Back\NewsController@edit']);


Route::get('admin/tis', ['as'=> 'admin.tis.index', 'uses' => 'Back\TiController@index']);
Route::post('admin/tis', ['as'=> 'admin.tis.store', 'uses' => 'Back\TiController@store']);
Route::get('admin/tis/create', ['as'=> 'admin.tis.create', 'uses' => 'Back\TiController@create']);
Route::put('admin/tis/{tis}', ['as'=> 'admin.tis.update', 'uses' => 'Back\TiController@update']);
Route::patch('admin/tis/{tis}', ['as'=> 'admin.tis.update', 'uses' => 'Back\TiController@update']);
Route::delete('admin/tis/{tis}', ['as'=> 'admin.tis.destroy', 'uses' => 'Back\TiController@destroy']);
Route::get('admin/tis/{tis}', ['as'=> 'admin.tis.show', 'uses' => 'Back\TiController@show']);
Route::get('admin/tis/{tis}/edit', ['as'=> 'admin.tis.edit', 'uses' => 'Back\TiController@edit']);


Route::get('findTranslations', 'HomeController@findTranslations');

Route::get('admin/languages', ['as'=> 'admin.languages.index', 'uses' => 'Back\LanguageController@index']);
Route::get('admin/languages/scan', ['as'=> 'admin.languages.scan', 'uses' => 'Back\LanguageController@scan']);
Route::post('admin/languages', ['as'=> 'admin.languages.store', 'uses' => 'Back\LanguageController@store']);
Route::get('admin/languages/create', ['as'=> 'admin.languages.create', 'uses' => 'Back\LanguageController@create']);
Route::put('admin/languages/{languages}', ['as'=> 'admin.languages.update', 'uses' => 'Back\LanguageController@update']);
Route::patch('admin/languages/{languages}', ['as'=> 'admin.languages.update', 'uses' => 'Back\LanguageController@update']);
Route::delete('admin/languages/{languages}', ['as'=> 'admin.languages.destroy', 'uses' => 'Back\LanguageController@destroy']);
Route::post('admin/languages/removeOld', ['as'=> 'admin.languages.removeOld', 'uses' => 'Back\LanguageController@removeOld']);
Route::post('admin/languages/{languages}/save', ['as'=> 'admin.languages.save', 'uses' => 'Back\LanguageController@save']);
Route::get('admin/languages/{languages}', ['as'=> 'admin.languages.show', 'uses' => 'Back\LanguageController@show']);
Route::get('admin/languages/{languages}/edit', ['as'=> 'admin.languages.edit', 'uses' => 'Back\LanguageController@edit']);
Route::get('admin/languages/{languages}/translate', ['as'=> 'admin.languages.translate', 'uses' => 'Back\LanguageController@translate']);




Route::get('admin/referrals', ['as'=> 'admin.referrals.index', 'uses' => 'Back\ReferralController@index']);
Route::post('admin/referrals', ['as'=> 'admin.referrals.store', 'uses' => 'Back\ReferralController@store']);
Route::get('admin/referrals/create', ['as'=> 'admin.referrals.create', 'uses' => 'Back\ReferralController@create']);
Route::put('admin/referrals/{referrals}', ['as'=> 'admin.referrals.update', 'uses' => 'Back\ReferralController@update']);
Route::patch('admin/referrals/{referrals}', ['as'=> 'admin.referrals.update', 'uses' => 'Back\ReferralController@update']);
Route::delete('admin/referrals/{referrals}', ['as'=> 'admin.referrals.destroy', 'uses' => 'Back\ReferralController@destroy']);
Route::get('admin/referrals/{referrals}', ['as'=> 'admin.referrals.show', 'uses' => 'Back\ReferralController@show']);
Route::get('admin/referrals/{referrals}/edit', ['as'=> 'admin.referrals.edit', 'uses' => 'Back\ReferralController@edit']);


Route::get('admin/reffLevels', ['as'=> 'admin.reffLevels.index', 'uses' => 'Back\ReffLevelController@index']);
Route::post('admin/reffLevels', ['as'=> 'admin.reffLevels.store', 'uses' => 'Back\ReffLevelController@store']);
Route::get('admin/reffLevels/create', ['as'=> 'admin.reffLevels.create', 'uses' => 'Back\ReffLevelController@create']);
Route::put('admin/reffLevels/{reffLevels}', ['as'=> 'admin.reffLevels.update', 'uses' => 'Back\ReffLevelController@update']);
Route::patch('admin/reffLevels/{reffLevels}', ['as'=> 'admin.reffLevels.update', 'uses' => 'Back\ReffLevelController@update']);
Route::delete('admin/reffLevels/{reffLevels}', ['as'=> 'admin.reffLevels.destroy', 'uses' => 'Back\ReffLevelController@destroy']);
Route::get('admin/reffLevels/{reffLevels}', ['as'=> 'admin.reffLevels.show', 'uses' => 'Back\ReffLevelController@show']);
Route::get('admin/reffLevels/{reffLevels}/edit', ['as'=> 'admin.reffLevels.edit', 'uses' => 'Back\ReffLevelController@edit']);
