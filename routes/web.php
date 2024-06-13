Route::get('/', 'DiamondController@index');
Route::post('/calculate', 'DiamondController@calculate')->name('diamond.calculate');