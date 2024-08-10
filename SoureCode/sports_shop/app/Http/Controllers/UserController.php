<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','DESC')->search()->paginate();

        return view('admin.user.index', compact('users'));
    }

    public function create(User $user)
    {
        return view('admin.user.create');
    }

    public function store(Request $req)
    {
        $rules = ['upload' => 'required:mimes:jpg, png, gif',
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'confirm_password' => 'required|same:password'
    ];
        $message = [
        'upload.required' => 'Vui lòng chọn một ảnh',
        'upload.mimes' => 'Định dạng file cho phép là: jpg, png, gif',
        'name.required' => 'Tên không được để trống',
        'email.required' => 'Email không được để trống',
        'password.required' => 'Mật khẩu không được để trống',
        'confirm_password.required' => 'Bạn chưa xác nhận lại mật khẩu',
        'confirm_password.same' => 'Mật khẩu không giống, vui lòng nhập lại',
    ];

        $req->validate($rules,$message);
        $file_name = $req->upload->getClientOriginalName();

        $user = new user();
        $user->name = $req->name;
        
        $user->avatar = $file_name;
        $user->email =  $req->email;
        $user->password =  bcrypt($req->password);
        $user->save();

        $req->upload->move(public_path('images'), $file_name);
        return redirect()->route('user.index');
        }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    public function update(Request $req, User $user)
    {
        $req->validate([
            'upload' => 'mimes:jpg,jpeg,png,gif',
            'name' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ],[
            'upload.required' => 'Vui lòng chọn một ảnh',
            'upload.mimes' => 'Định dạng file cho phép là: jpg, png, gif',
            'name.required' => 'Tên không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            'confirm_password.required' => 'Bạn chưa xác nhận lại mật khẩu',
            'confirm_password.same' => 'Mật khẩu không giống, vui lòng nhập lại',
        ]);
        $form_data = $req->only('name','password');
        $form_data['password'] = bcrypt($req->password);
        if ($req->has('upload')) {
            $f_name = $req->upload->getClientOriginalName();
            $req->upload->move(public_path('images'), $f_name);
            $form_data['avatar'] = $f_name;
        }
        
        if ($user->update($form_data)) {
            
            return redirect()->route('user.index')->with('yes', 'Cập nhật sản phẩm thành công');
        }

        return redirect()->back()->with('no', 'Cập nhật sản phẩm thất bại');
    }

    public function destroy($id){
        try {
            User::find($id)->delete();

            return redirect()->back()->with('yes', 'Xóa sản phẩm thành công');
        } catch (\Throwable $th) {

            return redirect()->back()->with('no', 'Xóa sản phẩm thất bại');
        }
    }
}