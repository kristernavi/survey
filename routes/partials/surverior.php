<?php
    Route::post('surverior/login', 'Auth\LoginController@surverior')->name('surverior.login')->middleware('guest');
Route::get('surverior/login', function () {
    return view('auth.sample');
})->name('surverior.login.index')->middleware('guest');

Route::prefix('surverior')->middleware('surverior')->group(function () {
    Route::get('', 'DashboardController@surverior')->name('surverior.index');
    Route::resource('house-hold', 'HouseHoldController');
    Route::get('survey/house-hold', 'SurveyController@households')->name('survey.household.autocomplete');
    Route::get('sample', function () {
        return view('surverior.survey.dog_population_add');
    });
    Route::post('dog', 'DogPopulationController@store')->name('dog.store');
    Route::get('dog/{id}/edit', 'DogPopulationController@edit')->name('dog.edit');
    Route::put('dog/{id}', 'DogPopulationController@update')->name('dog.update');

    Route::get('survey', 'SurveyController@index')->name('survey.index');
    Route::get('survey/{id}/edit', 'SurveyController@edit')->name('survey.edit');
    Route::get('survey/add/step1', 'SurveyController@step1')->name('survey.add.step1');
    Route::get('survey/add/step2', 'SurveyController@step2')->name('survey.add.step2');
    Route::resource('crops', 'CropsController');
});
