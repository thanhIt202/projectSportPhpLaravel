<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Auth;

class OderController extends Controller
{
    public function index(Order $order)
    {
       
        $order = Order::orderBy('id','DESC')->search()->paginate(5);
        return view('admin.order.index', compact('order'));
    }

    public function update ($id, Request $req)
    {
        Order::where('id',$id)->update($req->only('status'));
        return redirect()->route('order.index')->with('yes', 'Cập nhật danh mục thành công');

    }
}