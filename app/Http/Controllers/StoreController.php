<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Store;
class StoreController extends Controller
{
    public function index()
    {      
       $store = Store::all();
       return $store;    
   
    }

    public function insert(Request $request)
    {         
       $store= new Store();
       $store->id = $request->input('id');
       $store->dia_chi = $request->input('dia_chi');
       $store->email = $request->input('email');
       $store->sdt = $request->input('ten_san_pham');
       $store->nguoi_dung_id = $request->input('don_gia');
       $result=$store->save();
       if($result==1)
       {
         return response()->json($store, 201);
       }
    }
    public function update(Request $request, $id)
    {
        $store = new Store();
        $store = Store::findOrFail($id);
        $store->update($request->all());

       return response()->json($store, 200);    
      
    } 
    
    public function delete($id)
    {
        $store = new Store();
        $store = Store::findOrFail($id);
        $store->delete();
        return response()->json(null, 204);
      
    }   
}