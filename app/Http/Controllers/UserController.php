<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index()
    {      
       $user = User::all();
       return $user;    
   
    }

    public function insert(Request $request)
    {         
       $user= new User;
       $user->id = $request->input('id');
       $user->ho_ten = $request->input('ho_ten');
       $user->email = $request->input('email');
       $user->mat_khau = Hash::make($request->input('mat_khau'));
       $user->so_dien_thoai = $request->input('so_dien_thoai');
       $user->dia_chi=$request->input('dia_chi');   
       $user->vai_tro_id=$request->input('vai_tro_id');
       $result=$user->save();
       if($result==1)
       {
         return response()->json($user, 201);
       }
    }
    public function update(Request $request, $id)
    {
      $product = new User();
       $product = User::findOrFail($id);
       $product->update($request->all());

       return response()->json($product, 200);    
      
    } 
    
    public function delete($id)
    {
       $product = new User();
       $product = User::findOrFail($id);
       $product->delete();
       return response()->json(null, 204);
      
    }   
}