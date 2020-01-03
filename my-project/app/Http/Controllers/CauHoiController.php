<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cau_Hoi;
use App\Linh_Vuc;

class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsCauHoi = Cau_Hoi::all();
        return view('CauHoi.quanlycauhoi', compact('dsCauHoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsLinhVuc = Linh_Vuc::all();
        return view('CauHoi.themmoicauhoi', compact('dsLinhVuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cauhoi = new Cau_Hoi;
        $cauhoi->noi_dung = $request->noi_dung_cau_hoi;
        $cauhoi->linh_vuc_id = $request->linh_vuc;
        $cauhoi->phuong_an_a = $request->phuong_an_a;
        $cauhoi->phuong_an_b = $request->phuong_an_b;
        $cauhoi->phuong_an_c = $request->phuong_an_c;
        $cauhoi->phuong_an_d = $request->phuong_an_d;
        $cauhoi->dap_an = $request->dap_an;
        $cauhoi->save();
        return redirect()->route('cau-hoi.ds-cau-hoi');
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
        $CauHoi=Cau_Hoi::find($id);
        $dsLinhVuc = Linh_Vuc::all();
        return view('CauHoi.capnhatcauhoi', compact('CauHoi','dsLinhVuc'));
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
        $CauHoi=Cau_Hoi::find($id);
        $CauHoi->noi_dung = $request->noi_dung_cau_hoi;
        $CauHoi->linh_vuc_id = $request->linh_vuc;
        $CauHoi->phuong_an_a = $request->phuong_an_a;
        $CauHoi->phuong_an_b = $request->phuong_an_b;
        $CauHoi->phuong_an_c = $request->phuong_an_c;
        $CauHoi->phuong_an_d = $request->phuong_an_d;
        $CauHoi->dap_an = $request->dap_an;
        $CauHoi->save();
        return redirect()->route('cau-hoi.ds-cau-hoi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cau_Hoi::where('id', $id)->delete();
        return redirect()->route('cau-hoi.ds-cau-hoi');
    }
}
