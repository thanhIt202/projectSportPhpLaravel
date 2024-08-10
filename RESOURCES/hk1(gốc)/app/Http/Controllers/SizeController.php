<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;

class SizeController extends Controller
{
    public function index()
    {   
        
        $size = Size::all();

        return view('admin.size.index', compact('size'));
    }
    public function create()
    {
        return view('admin.size.create');
    }
    public function store(Request $req)
    {
       
        $form_data = $req->only('name');
        Size::create($form_data); //ORM
        return redirect()->route('size.index')->with('yes', 'Thêm mới danh mục thành công');
    }
    public function destroy($id){
        try {
            Size::find($id)->delete();
            return redirect()->back()->with('yes', 'Xóa danh mục thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('no', 'Xóa danh mục thất bại vì có sản phẩm!');
        }  
    }
    public function edit($id)
    {
        $size = Size::find($id);
        return view('admin.size.edit',compact('size'));
    }
    public function update($id,Request $request)
    {
        
     
        Size::where('id',$id)->update($request->only('name'));
        return redirect()->route('size.index')->with('yes', 'Cập nhật danh mục thành công');
    }
}
