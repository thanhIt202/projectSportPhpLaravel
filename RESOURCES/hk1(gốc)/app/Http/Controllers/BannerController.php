<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::paginate(3);

        return view('admin.banner.index', compact('banner'));
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(Request $req)
    {
        $rules = [
            'name' => 'required|max:30',
            'content' => 'required|max:150',
            'upload' => 'required:mimes:jpg, png, gif'
        ];
        $message = [
            'name.required' => 'Slogan Không thể để trống',
            'name.max' => 'Slogan tối đa 30 ký tự',
            'content.required' => 'Content Không thể để trống',
            'content.max' => 'Content tối đa 150 ký tự',
            'upload.required' => 'Vui lòng chọn một ảnh',
            'upload.mimes' => 'Định dạng file cho phép là: jpg, png, gif',
        ];

        $req->validate($rules,$message);
        $file_name = $req->upload->getClientOriginalName();

        $banner = new banner();
        $banner->name = $req->name;
        $banner->img = $file_name;
        $banner->content = $req->content;
        $banner->save();

        $req->upload->move(public_path('images'), $file_name);

        return redirect()->route('banner.index');
    }

    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    }

    public function update(Request $req, Banner $banner)
    {
        $req->validate([
            'name' => 'required|max:30',
            'content' => 'required|max:150',
            'upload' => 'mimes:jpg, png, gif'
        ],[
            'name.required' => 'Slogan Không thể để trống',
            'name.max' => 'Slogan tối đa 30 ký tự',
            'content.required' => 'Content Không thể để trống',
            'content.max' => 'Content tối đa 150 ký tự',
            'upload.mimes' => 'Định dạng file cho phép là: jpg, png, gif',
        ]);
        $form_data = $req->only('name','content');
        
        if ($req->has('upload')) {
            $f_name = $req->upload->getClientOriginalName();
            $req->upload->move(public_path('images'), $f_name);
            $form_data['img'] = $f_name;
        }

        if ($banner->update($form_data)) {
            return redirect()->route('banner.index')->with('yes', 'Cập nhật thành công');
        }

        return redirect()->back()->with('no', 'Cập nhật thất bại');
    }

    public function destroy($id)
    {
        try {
            Banner::find($id)->delete();

            return redirect()->back()->with('yes', 'Xóa thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('no', 'Xóa thất bại');
        }
    }
}