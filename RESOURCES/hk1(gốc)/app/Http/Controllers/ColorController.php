<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    public function index()
    {   
        
        $color = Color::all();

        return view('admin.color.index', compact('color'));
    }
    public function create()
    {
        return view('admin.color.create');
    }
    public function store(Request $req)
    {
       
        $form_data = $req->only('name');
        Color::create($form_data); //ORM
        return redirect()->route('color.index')->with('yes', 'Thêm mới danh mục thành công');
    }
    public function destroy($id){
        try {
            Color::find($id)->delete();
            return redirect()->back()->with('yes', 'Xóa danh mục thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('no', 'Xóa danh mục thất bại vì có sản phẩm!');
        }  
    }
    public function edit($id)
    {
        $color = Color::find($id);
        return view('admin.color.edit',compact('color'));
    }
    public function update($id,Request $request)
    {
        
     
        Color::where('id',$id)->update($request->only('name'));
        return redirect()->route('color.index')->with('yes', 'Cập nhật danh mục thành công');
    }
}
