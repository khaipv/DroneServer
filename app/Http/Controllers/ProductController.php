<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
class ProductController extends Controller
{
    public function index()
    {      
       $product = Product::all();
       return $product;    
   
    }

    public function insert(Request $request)
    {         
       $product= new Product;
       $product->id = $request->input('id');
       $product->danh_muc_id = $request->input('danh_muc_id');
       $product->nha_cung_cap_id = $request->input('nha_cung_cap_id');
       $product->ten_san_pham = $request->input('ten_san_pham');
       $product->don_gia = $request->input('don_gia');
       $product->don_vi_ban = $request->input('don_vi_ban');
       $product->don_vi_ton_kho = $request->input('don_vi_ton_kho');
       $product->sale = $request->input('sale');
       $product->mo_ta_chung = $request->input('mo_ta_chung');
       $product->diem_danh_gia_tb = $request->input('diem_danh_gia_tb');
       $result=$product->save();
       if($result==1)
       {
         return response()->json($product, 201);
       }
    }
    public function update(Request $request, $id)
    {
      $product = new Product();
       $product = Product::findOrFail($id);
       $product->update($request->all());

       return response()->json($product, 200);    
      
    } 
    
    public function delete($id)
    {
       $product = new Product();
       $product = Product::findOrFail($id);
       $product->delete();
       return response()->json(null, 204);
      
    }   
}