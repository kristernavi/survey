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
Route::auth();
// Route::get('sample', function () {
//     return view('auth.sample');
// })->middleware('guest');
// Route::get('home', function () {
//     return view('home');
// });
Route::get('/', function () {
    return redirect(route('surverior.login.index'));
});
Route::get('/home', function () {
    if (Auth::user()->type == 'admin') {
        return redirect(route('admin.index'));
    } else {
        return redirect(route('surverior.index'));
    }
});
foreach (File::allFiles(__DIR__.'/partials') as $partials) {
    # code...

    require_once $partials->getPathname();
}
