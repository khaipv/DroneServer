<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Cart;
use App\Model\CartDetail;
class CartController extends Controller
{
    public function index()
    {      
       $cart= Cart::all();
       return $cart;    
   
    }

    public function insert(Request $request)
    {         
       $cart= new Cart();
       $cart->id = $request->input('id');
       $cart->ma_nguoi_dung = $request->input('ma_nguoi_dung');
      
       $result=$cart->save();
       if($result==1)
       {
         return response()->json($cart, 201);
       }
    }
    public function update(Request $request, $id)
    {
       $cart = new Cart();
       $cart = Cart::findOrFail($id);
       $cart->update($request->all());

       return response()->json($cart, 200);    
      
    } 
    
    public function delete($id)
    {
       $cart = new Cart();
       $cart = Cart::findOrFail($id);
       $cart->delete();
       return response()->json(null, 204);
      
    } 
    
    public function getdetailcart($id)
    {      
       $cartdetail= CartDetail::all()->where('gio_hang_id',$id) ;
       return $cartdetail;    
   
    }
}