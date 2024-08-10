<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Helper\Carts;

class BlogController extends Controller
{
    public function index(Carts $cart)
    {   
        $blog = Blog::paginate(4);

        return view('admin.blog.index', compact('blog', 'cart'));
    }
    
    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $req)
    {
        $rules = [
            'name' => 'required|max:100',
            'content' => 'required|max:500',
            'upload' => 'required:mimes:jpg, png, gif'
        ];
        $message = [
            'name.required' => 'Slogan Không thể để trống',
            'name.max' => 'Slogan tối đa 100 ký tự',
            'content.required' => 'Content Không thể để trống',
            'content.max' => 'Content tối đa 500 ký tự',
            'upload.required' => 'Vui lòng chọn một ảnh',
            'upload.mimes' => 'Định dạng file cho phép là: jpg, png, gif',
        ];

        $req->validate($rules,$message);
        $file_name = $req->upload->getClientOriginalName();

        $blog = new blog();
        $blog->name = $req->name;
        $blog->image = $file_name;
        $blog->content = $req->content;
        $blog->save();

        $req->upload->move(public_path('images'), $file_name);

        return redirect()->route('blog.index');
    }

    public function destroy($id){
        try {
            Blog::find($id)->delete();

            return redirect()->back()->with('yes', 'Xóa blog thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('no', 'Xóa blog thất bại');
        }
    }

    public function update (Blog $blog, Request $req)
    {
        $req->validate([
            'name' => 'required',
            'content' => 'required',
            'upload' => 'mimes:jpg,png,gif'
        ],[
            'name.required' => 'Tên không được để trống',
            'content.required' => 'Bạn phải nhập mô tả sản phẩm',
            'upload.mimes' => 'Định dạng file cho phép là: jpg, png, gif'
        ]);
        $form_data = $req->only('name', 'content');

        if ($req->has('upload')) {
            $f_name = $req->upload->getClientOriginalName();
            $req->upload->move(public_path('images'), $f_name);
            $form_data['image'] = $f_name;
        }

        if ($blog->update($form_data)) {
            return redirect()->route('blog.index')->with('yes', 'Cập nhật blog thành công');
        }

        return redirect()->back()->with('no', 'Cập nhật blog thất bại');
    }

    public function edit (Blog $blog)
    {
        return view('admin.blog.edit',compact('blog'));
    }
}