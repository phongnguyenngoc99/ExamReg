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

Route::group(['namespace' => 'Admin'],function(){
	
	Route::group(['prefix' => 'login', 'middleware'=>'CheckLogedIn'],function(){
		Route::get('/','LoginController@getLogin');   // goi getLogin trong Function LoginController
		Route::post('/','LoginController@postLogin'); //goi postLogin trong Function LoginController
	});

	Route::get('logout', 'HomeController@getLogout'); //goi phuong thuc getLogout trong HomeController de LouOut
	Route::group(['prefix' => 'admin', 'middleware'=>'CheckLogedOut'], function(){
		Route::get('home', 'HomeController@getHome'); //goi phuong thuc getHome trong HomeController de LogIn

		Route::group(['prefix' => 'regist'], function(){
			/*Route::get('add-to-dsdk/{id}','RegistController@getAddToDSDK');*/

			Route::get('/',[  // view regist page
				'uses' => 'RegistController@getRegist',
				'as' => 'regist' 
			]);
			Route::post('/post', 'RegistController@postSelected');  //posting subs registed to database
			Route::get('/{id1}/{id2}/{id3}', 'RegistController@delete'); //delele subs registed

			Route::get('/export-pdf/pdf', 'ExportPDFController@exportPDF');  //view file pdf page
			Route::get('export-pdf','ExportPDFController@exportPDF');  //view file pdf page
		});
		Route::get('print', 'PrintController@getPrint'); //view print page

		Route::group(['prefix' => 'subs'], function(){
			Route::get('add', 'SubController@getAddSub'); //views
			Route::post('add', 'SubController@postAddSub'); //admin post subs 
			Route::get('add/{id}', 'SubController@delSub'); // delete sub

			Route::get('add-student', 'addSvController@getAddSv');	//view add students page
			Route::post('add-student/import', 'addSvController@import');  //import file excel(student) 
			Route::post('add-student/importSVx', 'addSvController@importSVx'); //import file excel(studen not dkthi) 

			Route::get('add-room', 'roomControllerr@getRoom');  //view add room page
			Route::post('add-room', 'roomControllerr@postRoom'); //posting room to database
			Route::get('add-room/{id}', 'roomControllerr@delRoom'); //del room

		});	
	});
});
