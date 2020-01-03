<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quan_Tri_Vien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class QuanTriVienController extends Controller
{
	protected $redirectTo = 'masterpages';

    public function DangNhap()
    {
    	return view('DangNhap.dangnhap');
    }

    public function XuLyDangNhap(Request $Request)
    {
    	$ten_dang_nhap = $Request->ten_dang_nhap;
    	$mat_khau = $Request->mat_khau;

    	if(Auth::attempt(['ten_dang_nhap' => $ten_dang_nhap, 'password' => $mat_khau]))
    	{
    		return redirect()->route('master');
    	}
        else
        {
            return redirect()->route('dang-nhap')->with('error','Đăng nhập thất bại');
        }
	}

	public function DangXuat()
	{
		Auth::logout();
		return redirect()->route('dang-nhap');
	}
}