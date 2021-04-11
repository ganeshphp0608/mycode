<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Models\Register;
use App\Models\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use DB;
use Illuminate\Support\Facades\Session;



class LoginController extends Controller
{
    function login(Request $req)
    {      
      $email= $req->input('email');
      $password=$req->input('password');
      $user=Register::where('email',$email)->first();             
     if($user && Hash::check($password,$user->password))
     {
       $req->session()->put('user',$user);
       return redirect('/homepage') ;    
     }
     else
     {      
        //return redirect('/'); 
       return redirect('/')->with('loginstatus','Please check Email or Password');   
     
     }

    }
    function submit_reg(Request $req)
    {
           $fileModel = new Register;
           $fileModel->name = $req->input('name');
           $fileModel->email = $req->input('email');
           $fileModel->password =Hash::make($req->input('password'));           
            $fileModel->save();
            return back()
            ->with('success','Registered Successfully.');         
           
    }
    function logout(Request $req)
    {
        $req->session()->forget('user');
      //  Session::flash('loginstatus', 'alert-danger');
        return redirect('/')->with('loginstatus','Logout Successfully.');
    }
    function homepage()
    {
                $data=File::all();
                return view('admin.home',['result'=>$data]);

    }
    function uploadimage(Request $req)
    {
    $req->validate([
            'file' => 'required|mimes:png,jpg,ppt,pdf,doc,Docx,ppt,Xls,xlsx,txt|max:2048'   
           ]);   
       $data['file_uploadby']=$req->session()->get('user')->name;
       $data['file_extension'] =$req->file('file')->guessExtension();
       $data['file_type'] =$req->file('file')->getMimeType();
       $data['file_name'] =$req->file('file')->getClientOriginalName();
       $data['file_size'] =$req->file('file')->getSize();
       $data['newfilename']= time().'_'.$req->file->getClientOriginalName();
      $req->file->move(public_path('uploads'), $data['newfilename']);  
    File::insert($data);
    return redirect('homepage')
           ->with('fileuploaded','File has been uploaded.');          
    }
    function search(Request $req)
    {
        $term=$req->input('search');
        $data = DB::table('files')->orWhere('file_name','LIKE','%'.$term.'%')       
                        ->orWhere('file_size','LIKE','%'.$term.'%')
                        ->orWhere('file_uploadby','LIKE','%'.$term.'%')
                        ->orWhere('file_type','LIKE','%'.$term.'%')
                     ->get();
                     return view('admin.home',['result'=>$data]);
        
    }
}

