<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Blog;
use Illuminate\Validation\Validator; 



class BlogController extends Controller
{
    
    public function particular_blog(Request $request){

        $blog_id = $request['blogid'];

        $blog = Blog::find($blog_id);

        if($blog != null){

            return view("blog", ['blog' => $blog]);

        }else{
            return view("blog", ['error' => "id not found"]);
        }



    }

    public function create_blog(){

        return view("create_blog");

    }

    public function post_blog(Request $request){
         $request->validate([
            'title' => 'required',
            'username' => auth()->user()->username,
            'body' => 'required',
        ]);

      

        Blog::create([
            "title" => $request['title'],
            "username"=> auth()->user()->username,
            "body" => $request['body'],
        ]);
   
      
        
  
        return redirect("dash")->withSuccess('Created Blog! :)');
    }
}
