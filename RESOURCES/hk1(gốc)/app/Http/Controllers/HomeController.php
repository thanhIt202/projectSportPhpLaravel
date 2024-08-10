<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Color;
use App\Models\Size;
use App\Helper\Carts;
use App\Models\Favourite;
use Auth;
use Hash;
use App\Models\Order;
use App\Models\OrderDetail;
use Str;
use PDF;

class HomeController extends Controller
{
    public function index(Carts $cart)
    {
        $pro = Product::search()->paginate();
        $fa = Favourite::all();
        $cat = Category::search()->paginate();
        $banner = Banner::all();
        
        $newProduct = Product::new(6)->get();
        $saleProduct = Product::sale(6)->get();
        $hotProduct = Product::hot(6)->get();
        $randomProduct = Product::inRandomOrder()->limit(6)->get();
        
        return view('home', compact('pro','fa', 'cat', 'cart', 'banner', 'newProduct', 'saleProduct', 'hotProduct', 'randomProduct'));
    }

    public function blog(Carts $cart)
    {
        $blog = Blog::paginate(4);
        $cat = Category::all();
        $hotProduct = Product::hot(6)->get();
        $saleProduct = Product::sale(6)->get();
        $newProduct = Product::sale(6)->get();
        
        return view('blog', compact('hotProduct', 'saleProduct', 'newProduct', 'blog', 'cat', 'cart'));
    }

    public function search(Carts $cart)
    {
        $pro = Product::search()->paginate();
        $cat = Category::search()->paginate();
        
        return view('search', compact('pro', 'cat', 'cart'));
    }

    public function contact(Carts $cart)
    {
        $cat = Category::all();
        return view('contact', compact('cat','cart'));
    }
    
    public function categoryDetail(Category $category, $slug, Carts $cart)
    {
        $cat = Category::all();
        $hotProduct = Product::hot(6)->get();
        $saleProduct = Product::sale(6)->get();
        $newProduct = Product::sale(6)->get();
        $shopProduct = Product::new(6)->where('category_id', $category->id)->get();
        return view('customer.shop', compact('hotProduct', 'saleProduct', 'newProduct', 'shopProduct', 'category', 'cat', 'cart'));
    }
    
    public function productDetail(Product $product, $slug, Carts $cart)
    {
        $color = Color::all();
        $size = Size::all();
        $cat = Category::all();
        $fa = Favourite::all();
        $hotProduct = Product::hot(6)->get();
        $saleProduct = Product::sale(6)->get();
        $newProduct = Product::sale(6)->get();
        $detailProduct = Product::new(6)->where('category_id', $product->category_id)->get();

        return view('customer.detail', compact('hotProduct', 'saleProduct', 'newProduct', 'detailProduct', 'product', 'cat', 'color', 'size', 'cart', 'fa')); 
    }

    public function login(Carts $cart)
    {
        $cat = Category::all();

        return view('customer.login', compact('cat', 'cart'));
    }

    public function loginAdmin()
    {
        return view('admin.login');
    }
    
    public function check_login(Request $Request)
    {
        $Request->validate([
            'email' => 'required',
            'password' => 'required',
       ], [
           'email.required' => 'Bạn chưa nhập Email ',
           'password.required' => 'Bạn chưa nhập Mật khẩu ',
           
       ]);
        $form_data2 = $Request->only('email','password');
        
        if (auth('cus')->attempt($form_data2)) {
            return redirect()->route('home.index');
        }

        return redirect()->back()->with('n', 'Đăng nhập không thành công, vui lòng thử lại');
    }

    public function register()
    {
        return view('customer.login');
    }

    public function check_register(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
       ], [
           'name.required' => 'Tên không được để trống',
           'phone.required' => 'Số điện thoại không được để trống',
           'phone.numeric' => 'Bạn phải nhập số',
           'address.required' => 'Địa chỉ không được để trống',
           'email.required' => 'Email không được để trống',
           'password.required' => 'Mật khẩu không được để trống',
           'confirm_password.required' => 'Bạn chưa xác nhận lại mật khẩu',
           'confirm_password.same' => 'Mật khẩu không giống, vui lòng nhập lại',
           
       ]);
        $form_data = $req->only('email','password','name','phone','address');
        $form_data['password'] = bcrypt($req->password);

        if (Customer::create($form_data)) {
            return redirect()->back()->with('yes', 'Đăng ký thành công, bạn có thể đăng nhập');
        }

        return redirect()->back()->with('no', 'Đăng ký không thành công, vui lòng thử lại');
    }

    public function account(Carts $cart)
    {
        $cat = Category::all();
        return view('customer.account',compact('cat', 'cart'));
    }


    public function edit_info(Request $req)
    {
        $cus_id=auth('cus')->user()->id;
        $req->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
       ], [
           'name.required' => 'Tên không được để trống',
           'phone.required' => 'Số điện thoại không được để trống',
           'phone.numeric' => 'Bạn phải nhập số',
           'address.required' => 'Địa chỉ không được để trống',
       ]);
       Customer::where('id',$cus_id)->update($req->only('name','phone','address'));
        return redirect()->route('home.index');

    }   

    public function edit_password(Customer $cus,Request $req)
    {
        $cus_id=auth('cus')->user()->id;
        $cus_password=auth('cus')->user()->password;
        $req->validate([
            'old_password' => [ 'required',
            function ($attribute, $value, $fail) {
                if (!Hash::check($value,Auth::guard('cus')->user()->password)) {
                    $fail('Mật khẩu không chính xác');
                }
            },
        ],
            'password' => 'required',
            'confirm_password' => 'required|same:password'
       ], [
           'password.required' => 'Mật khẩu mới không được để trống',
           'confirm_password.required' => 'Bạn chưa xác nhận lại mật khẩu',
           'confirm_password.same' => 'Mật khẩu không giống, vui lòng nhập lại',
           
       ]);
       $form_data = $req->only('password');
       $form_data['password'] = bcrypt($req->password);
        Customer::where('id',$cus_id)->update($form_data);
        return redirect()->route('home.index');
    }

    public function logout(Carts $cart)
    {
        auth('cus')->logout();

        return redirect()->route('home.index');
    }

    public function checkout(Carts $cart)
    {
        $auth = auth('cus')->user();
        $cat = Category::all();
        return view('customer.checkout', compact('auth', 'cart', 'cat'));
    }

    public function post_checkout(Request $req, Carts $cart)
    {
        $form_data = $req->only('email','name','phone','address');
        $form_data['customer_id'] = auth('cus')->id();

        if ($order = Order::create($form_data)) {
            foreach($cart->items as $item) {
                $detail_data = [
                    'order_id' => $order->id,
                    'product_id' => $item->id,
                    'quantity' => $item->quantity,
                    'buy_price' => $item->buy_price
                ];
                OrderDetail::create($detail_data);
            }
            session(['cart' => null]);
        }

        return redirect()->route('order.order_history')->with('yes', 'Đặt hàng thành công, bạn có thể xem lại đơn hàng');
    }

    public function order_history(Order $order, Carts $cart)
    {
        $orders = auth('cus')->user()->orders12356();
        $cat = Category::all();
        return view('customer.order-history', compact('orders','order', 'cart', 'cat'));
    }

    public function order_pdf(Order $order)
    {
        $pdf = PDF::loadView('invoice', ['order' => $order]);
        
        if (request('download', false)) {
            return $pdf->download('invoice.pdf');
        }
        
        return $pdf->stream('invoice.pdf');
    }
    
}
