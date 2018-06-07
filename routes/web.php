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



Auth::routes();


Route::get('/', function () {
    return Redirect::away('http://localhost/mml/');
});


Route::get('register/{sponsorid}', [
  'uses' => 'Auth\RegisterController@getSponsor'
]);

Route::get('register', [
  'as' => 'register',
  'uses' => 'Auth\RegisterController@getSponsor'
]);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    //Income Module....
    Route::get('/direct', 'IncomeController@getDirects')->name('direct');
    Route::get('/genealogy', 'IncomeController@getGenealogy')->name('genealogy');
    Route::get('/indirect', 'IncomeController@getIndirects')->name('indirect');

});

Route::group(['middleware' => ['auth','admin']], function () {

    Route::get('/admin', function () {
        return view('/admin/dashboard');
    });

    Route::get('/admin/encashment-request', function () {
        return view('/admin/encashment');
    });

    Route::get('/admin/settings', function () {
        return view('/admin/settings');
    });

    Route::get('/admin/master-file', 'MasterFileController@getInfoMF');

    Route::get('/admin/transactions', function () {
        return view('/admin/transactions');
    });

    Route::post('save-master-file', [
      'as' => 'save-master-file',
      'uses' => 'MasterFileController@saveMasterFile'
    ]);

    Route::post('save-income-setup',[
      'as' => 'save-income-setup',
      'uses' => 'MasterFileController@saveIncomeSetup'
    ]);

});
