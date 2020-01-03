<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Linh_Vuc;

class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsLinhVuc = Linh_Vuc::all();
        return view('LinhVuc.quanlylinhvuc', compact('dsLinhVuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('LinhVuc.themmoilinhvuc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->filled('ten_linh_vuc'))
        {
            $linhvuc = new Linh_Vuc;
            $linhvuc->ten_linh_vuc = $request->ten_linh_vuc;
            $linhvuc->save();
            return redirect()->route('linh-vuc.ds-linh-vuc')->with('success','Bạn đã thêm mới một lĩnh vực!');
        }
        else
        {
            return redirect()->route('linh-vuc.them-moi-linh-vuc')->with('error','Thêm mới thất bại!');
        }
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
        $LinhVuc = Linh_Vuc::findOrFail($id);
        return view('LinhVuc.capnhatlinhvuc', compact('LinhVuc'));
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
        $LinhVuc=Linh_Vuc::find($id);
        $LinhVuc->ten_linh_vuc = $request->ten_linh_vuc;
        $LinhVuc->save();
        return redirect()->route('linh-vuc.ds-linh-vuc')->with('update','Cập nhật thành công!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Linh_Vuc::where('id', $id)->delete();
        return redirect()->route('linh-vuc.ds-linh-vuc');
    }
}
