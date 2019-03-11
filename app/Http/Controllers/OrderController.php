<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Order;
use App\Model\OrderDetail;
class OrderController extends Controller
{
    public function index()
    {      
       $order = Order::all();
       return $order;    
   
    }

    public function insert(Request $request)
    {         
       $order= new Order();
       $order->id = $request->input('id');
       $order->dia_chi_nguoi_nhan = $request->input('dia_chi_nguoi_nhan');
       $order->ngay_dat = $request->input('ngay_dat');
       $order->ngay_nhan = $request->input('ngay_nhan');
       $order->sdt_nhan_hang = $request->input('sdt_nhan_hang');
       $order->trang_thai = $request->input('trang_thai');
       $order->nguoi_dung_id = $request->input('nguoi_dung_id');
       $result=$order->save();
       if($result==1)
       {
         return response()->json($order, 201);
       }
    }
    public function update(Request $request, $id)
    {
       $order = new Order();
       $order = Order::findOrFail($id);
       $order->update($request->all());

       return response()->json($order, 200);    
      
    } 
    
    public function delete($id)
    {
       $order = new Order();
       $order = Order::findOrFail($id);
       $order->delete();
       return response()->json(null, 204);
      
    }  
    
    public function getdetailorder($id)
    {      
       $orderdetail= OrderDetail::all()->where('don_hang_id',$id) ;
       return $orderdetail;    
   
    }
}