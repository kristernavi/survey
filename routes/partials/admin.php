<?php
 Route::get('admin/login', function () {
     return view('admin.auth.login');
 })->name('admin.login')->middleware('guest');
 Route::post('admin/login', 'Auth\LoginController@admin')->name('admin.login')->middleware('guest');
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', 'DashboardController@admin')->name('admin.index');
    Route::get('/user/all', 'UserController@all')->name('admin.user.all');
    Route::get('/barangay/all', 'BarangayController@all')->name('admin.barangay.all');
    Route::get('/barangay-purok/all', 'BarangayPurokController@all')->name('admin.barangay-purok.all');
    Route::get('/category/all', 'CategoryController@all')->name('admin.category.all');
    Route::get('/sub-category/all', 'SubCategoryController@all')->name('admin.sub-category.all');
    Route::get('/survey-field/category/{id}', 'SuveryFieldController@category')->name('admin.survey-field.category');


    Route::resource('user', 'UserController', [
        'as' => 'admin'
    ]);
    Route::resource('barangay', 'BarangayController', [
        'as' => 'admin'
    ]);
    Route::get('barangay-purok', 'BarangayPurokController@index')->name('admin.barangay-purok.index');
    Route::get('barangay-purok/create', 'BarangayPurokController@create')->name('admin.barangay-purok.create');
    Route::post('barangay-purok', 'BarangayPurokController@store')->name('admin.barangay-purok.store');
    Route::get('barangay-purok/{barangay_id}/{purok_id}/edit', 'BarangayPurokController@edit')->name('admin.barangay-purok.edit');
    Route::put('barangay-purok/{barangay_id}/{purok_id}', 'BarangayPurokController@update')->name('admin.barangay-purok.update');
    Route::delete('barangay-purok/{barangay_id}/{purok_id}', 'BarangayPurokController@destroy')->name('admin.barangay-purok.destory');

    Route::resource('category', 'CategoryController', [
        'as' => 'admin'
    ]);

    Route::resource('sub-category', 'SubCategoryController', [
        'as' => 'admin'
    ]);
    Route::get('survey-field/{id}', 'SuveryFieldController@index')->name('admin.survey-field.index');
    Route::get('survey-field/create/{id}', 'SuveryFieldController@create')->name('admin.survey-field.create');
    Route::post('survey-field', 'SuveryFieldController@store')->name('admin.survey-field.store');
    Route::get('survey-field/{id}/edit', 'SuveryFieldController@edit')->name('admin.survey-field.edit');
    Route::put('survey-field/{id}', 'SuveryFieldController@update')->name('admin.survey-field.update');
    Route::delete('survey-field/{id}', 'SuveryFieldController@destroy')->name('admin.survey-field.destory');
});
