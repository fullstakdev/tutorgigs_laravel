<?php

use Illuminate\Support\Facades\Route;

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

Route::get('remote',function(){
	$callback = isset($_REQUEST['callback'])?$_REQUEST['callback']:'';
	echo 'try { window[\''.$callback.'\'](\'{"_controls":[{"name":"calendar","title":"Date"}],"_hasDate":true,"_hasTime":false,"_valueFormat":"MM/DD/YYYY"}\'); } catch (ex) {}';
});
Route::get('log',function(){
	$callback = isset($_REQUEST['callback'])?$_REQUEST['callback']:'';
	echo 'try { window[\''.$callback.'\'](\'{"_controls":[{"name":"calendar","title":"Date"}],"_hasDate":true,"_hasTime":false,"_valueFormat":"MM/DD/YYYY"}\'); } catch (ex) {}';
});

/* General routes*/
	Route::get('session_details/{sid}','TeacherSessionController@sessionDetail');
/**/
//Route For Assesment Rule
Route::get('add-assesment-rule',function () { return view('add_assesment_rule'); });
Route::get('assesment-rule-list', 'TeacherController@listRules');
Route::post('store-assesment-rule','TeacherController@storeRule')->name('add.assesment.rule');
Route::get('ajax_laoding_data','TeacherController@ajax_laoding_data');
Route::get('delete/assesment-rule/{id}','TeacherController@deleteRule')->name('delete.assesment.rule');
Route::match(['GET','POST'],'edit/assesment-rule/{id}','TeacherController@editUpdate')->name('edit.assesment.rule');
Route::get('view-assesment-details/{id}','TeacherController@viewAssementDayDet');
//Session Route
Route::match(['GET','POST'],'create_session','TeacherController@createSession');
Route::group(['prefix'=>'session'], function(){
	Route::get('list','TeacherSessionController@index')->name('session.all_list');
	Route::match(['GET','POST'], 'edit/{id}', 'TeacherSessionController@editSession')->name('session.edit');
	Route::get('calendar-view','TeacherSessionController@calendarView')->name('session.calendar.view');
	Route::get('details/{ses_id}','TeacherSessionController@manage_sessions');
	Route::get('repeat-sessions','TeacherSessionController@repeatSession');
	Route::get('repeat-sessions/delete/{id}','TeacherSessionController@deleteRepeatSession')->name('repeat.sessions.delete');
	Route::get('repeat-sessions/edit/{id}','TeacherSessionController@edit')->name('repeat.sessions.edit');
	Route::post('repeat-sessions/update/{id}','TeacherSessionController@update')->name('repeat.sessions.update');
	Route::get('delete/no-repeat-session/{id}','TeacherSessionController@deleteSession')->name('delete.no_repeat.session');
});
//Holidays Route
Route::group(['prefix'=>'holiday'], function(){
	Route::get('/', 'Admin\HolidayController@index')->name('holiday.index');
	Route::post('/add','Admin\HolidayController@add')->name('holiday.add');
	Route::post('edit{holiday}','Admin\HolidayController@update')->name('holiday.update');
	Route::get('delete/{holiday}','Admin\HolidayController@delete')->name('holiday.delete');
});

Route::group(['prefix'=>'payment'], function(){
	Route::get('/','PaymentController@index')->name('payment.index');
	Route::post('/add','PaymentController@add')->name('payment.add');
	Route::post('/edit/{payment_rate}','PaymentController@edit')->name('payment.edit');
	Route::get('/delete/{payment_rate}','PaymentController@delete')->name('payment.delete');
	Route::get('/get_payment_rate','PaymentController@getPaymentRate')->name('payment.get_payment_rate');
});