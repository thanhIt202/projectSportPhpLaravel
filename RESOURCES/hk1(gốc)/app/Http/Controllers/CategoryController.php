<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class CategoryController extends Controller
{
    public function index()
    {   
        
        $category = Category::orderBy('id','DESC')->search()->paginate();

        return view('admin.category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $req)
    {
        $req->validate([
             'name' => 'required|max:100|unique:categories'
        ], [
            'name.required' => 'Tên danh mục không được để trống',
            'name.max' => 'Tên danh mục tối đa 100 ký tự',
            'name.unique' => 'Tên danh mục <b>'.$req->name.'</b> đã tồn tại'
        ]);

        $form_data = $req->only('name');
        Category::create($form_data); //ORM
        return redirect()->route('category.index')->with('yes', 'Thêm mới danh mục thành công');
    }
    
    
    public function destroy($id){
        try {
            Category::find($id)->delete();
            return redirect()->back()->with('yes', 'Xóa danh mục thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('no', 'Xóa danh mục thất bại vì có sản phẩm!');
        }  
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }
    

    public function update($id, Request $request)
    {
        $rules = [
            'name' => 'required|unique:categories,name,'.$id
        ];
        $messages = [
            'name.required' => 'Tên danh mục không để trống',
            'name.unique' => 'Tên danh mục đã được sử dụng',
        ];
        $request->validate($rules,$messages);
        Category::where('id',$id)->update($request->only('name'));
        return redirect()->route('category.index')->with('yes', 'Cập nhật danh mục thành công');
    }
    
}
