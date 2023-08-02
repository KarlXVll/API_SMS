Route::get('/', function () {
return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('clients', 'ClientController')->middleware('auth');
Route::resource('senders', 'SenderController')->middleware('auth');
Route::resource('partner_links', 'PartnerLinkController')->middleware('auth');
