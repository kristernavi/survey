<?php

Route::prefix('surverior')->group(function () {
    Route::post('login', 'Auth\LoginController@admin')->name('surverior.login')->middleware('guest');
    Route::get('', 'DashboardController@surverior')->name('surverior.index');
    Route::resource('house-hold', 'HouseHoldController');
    Route::get('survey/house-hold', 'SurveyController@households')->name('survey.household.autocomplete');
    Route::get('survey/add/step1', 'SurveyController@step1')->name('survey.add.step1');
    Route::get('survey/add/step2', 'SurveyController@step2')->name('survey.add.step2');
});
