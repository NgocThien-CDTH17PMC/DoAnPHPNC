<?php

Route::get('Dang-Xuat', 'QuanTriVienController@DangXuat')->name('dang-xuat');

Route::prefix('Dang-Nhap')->group(function(){
	
	Route::get('/', 'QuanTriVienController@DangNhap')->name('dang-nhap');
	Route::post('/', 'QuanTriVienController@XuLyDangNhap')->name('xu-ly-dang-nhap');
});

Route::middleware('auth')->group(function(){

	Route::get('/', function () {
		return view('masterpages');
	})->name('master');

	Route::prefix('Linh-Vuc')->group(function(){
		Route::name('linh-vuc.')->group(function(){
			Route::get('/', 'LinhVucController@index')->name('ds-linh-vuc');
			Route::get('/Them-Moi', 'LinhVucController@create')->name('them-moi-linh-vuc');
			Route::post('/Them-Moi', 'LinhVucController@store')->name('xu-ly-them-moi-linh-vuc');
			Route::get('/Cap-Nhat/{id}', 'LinhVucController@edit')->name('cap-nhat-linh-vuc');
			Route::post('/Cap-Nhat/{id}', 'LinhVucController@update')->name('xu-ly-cap-nhat-linh-vuc');
			Route::get('/Thung-Rac', 'LinhVucController@softdeletesmenthod')->name('ds-thung-rac-linh-vuc');
			Route::delete('/Thung-Rac/Xoa/{id}', 'LinhVucController@realdestroy')->name('xoa-linh-vuc-di');
			Route::get('/Thung-Rac/Phuc-Hoi/{id}', 'LinhVucController@restore')->name('phuc-hoi-linh-vuc');
			Route::delete('/Xoa/{id}', 'LinhVucController@destroy')->name('xoa-linh-vuc');
		});
	});

	Route::prefix('Cau-Hoi')->group(function(){
		Route::name('cau-hoi.')->group(function(){

			Route::get('/', 'CauHoiController@index')->name('ds-cau-hoi');
			Route::get('/Them-Moi', 'CauHoiController@create')->name('them-moi-cau-hoi');
			Route::post('/Them-Moi', 'CauHoiController@store')->name('xu-ly-them-moi-cau-hoi');
			Route::get('/Cap-Nhat/{id}', 'CauHoiController@edit')->name('cap-nhat-cau-hoi');
			Route::post('/Cap-Nhat/{id}', 'CauHoiController@update')->name('xu-ly-cap-nhat-cau-hoi');
			Route::get('/Thung-Rac', 'CauHoiController@softdeletesmenthod')->name('ds-thung-rac-cau-hoi');
			Route::delete('/Thung-Rac/Xoa/{id}', 'CauHoiController@realdestroy')->name('xoa-cau-hoi-di');
			Route::get('/Thung-Rac/Phuc-Hoi/{id}', 'CauHoiController@restore')->name('phuc-hoi-cau-hoi');
			Route::delete('/Xoa/{id}', 'CauHoiController@destroy')->name('xoa-cau-hoi');
		});
	});

	Route::prefix('Goi-Credit')->group(function(){
		Route::name('goi-credit.')->group(function(){

			Route::get('/', 'GoiCreditController@index')->name('ds-goi-credit');
			Route::get('/Them-Moi', 'GoiCreditController@create')->name('them-moi-goi-credit');
			Route::post('/Them-Moi', 'GoiCreditController@store')->name('xu-ly-them-moi-goi-credit');
			Route::get('/Cap-Nhat/{id}', 'GoiCreditController@edit')->name('cap-nhat-goi-credit');
			Route::post('/Cap-Nhat/{id}', 'GoiCreditController@update')->name('xu-ly-cap-nhat-goi-credit');
			Route::get('/Thung-Rac', 'GoiCreditController@softdeletesmenthod')->name('ds-thung-rac-goi');
			Route::delete('/Thung-Rac/Xoa/{id}', 'GoiCreditController@realdestroy')->name('xoa-goi-di');
			Route::get('/Thung-Rac/Phuc-Hoi/{id}', 'GoiCreditController@restore')->name('phuc-hoi-goi');
			Route::post('/Xoa/{id}', 'GoiCreditController@destroy')->name('xoa-goi-credit');
		});
	});

	Route::prefix('Luot-Choi')->group(function(){
		Route::name('luot-choi.')->group(function(){

			Route::get('/', 'LuotChoiController@index')->name('ds-luot-choi');
		});
	});

	Route::prefix('Nguoi-Choi')->group(function(){
		Route::name('nguoi-choi.')->group(function(){
			Route::get('/', 'NguoiChoiController@index')->name('ds-nguoi-choi');
		});
	});

});
