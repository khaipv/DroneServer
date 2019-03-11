<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Catagory;
class CatagoryController extends Controller
{
    public function index()
    {      
       $catagory = Catagory::all();
       return $catagory;    
   
    }

    public function insert(Request $request)
    {         
       $catagory= new Catagory();
       $catagory->id = $request->input('id');
       $catagory->ten_danh_muc = $request->input('ten_danh_muc');
       $result=$catagory->save();
       if($result==1)
       {
         return response()->json($catagory, 201);
       }
    }
    public function update(Request $request, $id)
    {
       $catagory = new Catagory();
       $catagory = Catagory::findOrFail($id);
       $catagory->update($request->all());

       return response()->json($catagory, 200);    
      
    } 
    
    public function delete($id)
    {
       $catagory = new Catagory();
       $catagory = Catagory::findOrFail($id);
       $catagory->delete();
       return response()->json(null, 204);
      
    }   
}