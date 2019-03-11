<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Role;
class RoleController extends Controller
{
    public function index()
    {      
       $role = Role::all();
       return $role;    
   
    }

    public function insert(Request $request)
    {         
       $role= new Role();
       $role->id = $request->input('id');
       $role->ten_vai_tro = $request->input('ten_vai_tro');
       $result=$role->save();
       if($result==1)
       {
         return response()->json($role, 201);
       }
    }
    public function update(Request $request, $id)
    {
        $role = new Role();
        $role = Role::findOrFail($id);
        $role->update($request->all());

       return response()->json($role, 200);    
      
    } 
    
    public function delete($id)
    {
        $role = new Role();
        $role = Role::findOrFail($id);
        $role->delete();
        return response()->json(null, 204);
      
    }   
}