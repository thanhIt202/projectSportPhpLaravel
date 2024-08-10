<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
class ProductController extends Controller
{
    public function index()
    {
        $product = Product::orderBy('id','DESC')->search()->paginate(3);
        return view('admin.product.index', compact('product'));
    }

    public function create()
    {
        $cat = Category::all();

        return view('admin.product.create', compact('cat'));
    }

    public function store( Request $req ){
        $rules = [        
            'name' => 'required',
            'short_content' => 'required',
            'long_content' => 'required',
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric|lte:price',
            'upload' => 'required:mimes:jpg, png, gif'
            ];
            $message = [
            'name.required' => 'Tên không được để trống',
            'upload.required' => 'Vui lòng chọn một ảnh',
            'short_content.required' => 'Bạn phải nhập mô tả sản phẩm',
            'long_content.required' => 'Bạn phải nhập mô tả sản phẩm',
            'sale_price.required' => 'Bạn chưa nhập giá sale, nếu không có sale thì vui lòng nhập 0',
            'price.required' => 'Bạn chưa nhập giá',
            'price.numeric' => 'Bạn phải nhập số',
            'sale_price.numeric' => 'Bạn phải nhập số',
            'sale_price.lte' => 'Không được nhập lớn hơn giá gốc',
            'upload.mimes' => 'Định dạng file cho phép là: jpg, png, gif',
            ];

        $req->validate($rules,$message);
        $file_name = $req->upload->getClientOriginalName();

        $products = new product();
        $products->name = $req->name;
        $products->price = $req->price;
        $products->sale_price = $req->sale_price;
        $products->image = $file_name;
        $products->category_id = $req->category_id;
        $products->short_content = $req->short_content;
        $products->long_content = $req->long_content;
        $products->status = $req->status;
        $products->save();

        $req->upload->move(public_path('images'), $file_name);

        return redirect()->route('product.index');
    }

    public function destroy($id){
        try {
            Product::find($id)->delete();

            return redirect()->back()->with('yes', 'Xóa sản phẩm thành công');
        } catch (\Throwable $th) {

            return redirect()->back()->with('no', 'Xóa sản phẩm thất bại');
        }
    }

    public function update (Product $product, Request $req)
    {
        $req->validate([
            'name' => 'required',
            'short_content' => 'required',
            'long_content' => 'required',
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric|lte:price',
            'upload' => 'mimes:jpg,png,gif'
        ],[
            'name.required' => 'Tên không được để trống',
            'short_content.required' => 'Bạn phải nhập mô tả sản phẩm',
            'long_content.required' => 'Bạn phải nhập mô tả sản phẩm',
            'price.required' => 'Bạn chưa nhập giá',
            'price.numeric' => 'Bạn phải nhập số',
            'sale_price.required' => 'Bạn chưa nhập giá sale, nếu không có sale thì vui lòng nhập 0',
            'sale_price.numeric' => 'Bạn phải nhập số',
            'sale_price.lte' => 'Không được nhập lớn hơn giá gốc',
            'upload.mimes' => 'Định dạng file cho phép là: jpg, png, gif'
        ]);
        $form_data = $req->only('name','price','sale_price', 'category_id', 'short_content', 'long_content', 'status');

        if ($req->has('upload')) {
            $f_name = $req->upload->getClientOriginalName();
            $req->upload->move(public_path('images'), $f_name);
            $form_data['image'] = $f_name;
        }

        if ($product->update($form_data)) {
            return redirect()->route('product.index')->with('yes', 'Cập nhật sản phẩm thành công');
        }

        return redirect()->back()->with('no', 'Cập nhật sản phẩm thất bại');

    }

    public function edit (Product $product)
    {
        $cat = Category::all();
        return view('admin.product.edit', compact('cat', 'product'));
    }
  
}