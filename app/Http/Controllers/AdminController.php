<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
class AdminController extends Controller
{
    public function dashBoard(){
        return view('admin.index');
    }

    public function login(){
        return view('admin.login');
    }

    
    public function loginProcess(Request $request){
        $admin = Admin::where('adminID','=',$request->username)->first();
        if($admin) {
            if($admin->adminPass == $request->password){
                $request->session()->put('adminID',$admin->adminID);
                $request->session()->put('adminName',$admin->adminFullname);
                $request->session()->put('adminPhoto',$admin->adminPhoto);
                return redirect('admin/index');
            }else{
                return back()->with('fail','Password not match!');
            }
        }else{
            return back()->with('fail','Username dóe not exist!!');
        }
        
         
    }

    public function logout(){
         if(Session::has('adminID'))
         Session::pull('adminID');
         if(Session::has('adminName'))
         Session::pull('adminName');
         if(Session::has('adminPhoto'))
         Session::pull('adminPhoto');
         return redirect('admin/login');
    }

    public function AdminList(){
        $data = Admin::get();
        
        //return $data;
        return view('admin.admin-list',compact('data'));
         
    }

    // public function AdminEdit(){
    //     //$data = Admin::get();
        
    //     //return $data;
    //     return view('admin.admin-edit' );
         
    // }

    public function delete($id)
    {
        Admin::where('adminID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }
    public function AdminEdit($id)
    {
         
        $data = Admin::where('adminID', '=', $id)->first();
        return view('admin.admin-edit', compact('data'));
    }

    public function update(Request $request)
    {
        $img = $request->new_image == "" ? $request->old_image : $request->new_image;
        Product::where('adminID', '=', $request->id)->update([
            'adminPass'=>$request->name,
            'productPrice'=>$request->price,
            'productImage'=>$img,
            'productDetails'=>$request->details,
            
        ]);
        return redirect()->back()->with('success', 'Product updated successfully!');
    }
    
}
