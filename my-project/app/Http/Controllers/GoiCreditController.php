<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goi_Credit;

class GoiCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsGoiCredit = Goi_Credit::all();
        return view('GoiCredit.quanlygoicredit', compact('dsGoiCredit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('GoiCredit.themmoigoicredit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $goicredit = new Goi_Credit;
        $goicredit->ten_goi = $request->ten_goi;
        $goicredit->ten_goi = $request->credit;
        $goicredit->ten_goi = $request->so_tien;
        $goicredit->save();

        return redirect()->route('goi-credit.ds-goi-credit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $GoiCredit=Goi_Credit::findOrFail($id);
        return view('GoiCredit.capnhatgoicredit', compact('GoiCredit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $GoiCredit=Goi_Credit::find($id);
        $GoiCredit->ten_goi = $request->ten_goi;
        $GoiCredit->credit = $request->credit;
        $GoiCredit->so_tien = $request->so_tien;
        $GoiCredit->save();
        return redirect()->route('goi-credit.ds-goi-credit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Goi_Credit::where('id', $id)->delete();
        return redirect()->route('goi-credit.ds-goi-credit')->with('delete','Đã cho vào thùng rác!');
    }

    public function realdestroy($id)
    {
        Goi_Credit::where('id', $id)->forcedelete();
        return redirect()->route('goi-credit.ds-thung-rac-goi')->with('realdelete','Đã xóa thành công!');
    }

    public function restore($id)
    {
        Goi_Credit::where('id', $id)->restore();
        return redirect()->route('goi-credit.ds-thung-rac-goi')->with('restore','Phục hồi thành công!');
    }

    public function softdeletesmenthod()
    {
        $dsGoiCreditDaXoa = Goi_Credit::onlyTrashed()->get();
        return view('GoiCredit.thungracgoicredit', compact('dsGoiCreditDaXoa'));
    }
}
