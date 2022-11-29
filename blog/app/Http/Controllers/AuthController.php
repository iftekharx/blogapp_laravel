<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Blog;

class AuthController extends Controller
{
    //

    public function log()
    {
        return view('login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function reg()
    {
        return view('register');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dash')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
      

    public function about(){
        return view("profile");
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
           
        $data = $request->all();

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
  
        if ($image = $request->file('image')) {
            $destinationPath = 'profile_pics/';
            $profileImage = "profile_pics/" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        User::create($input);

        return redirect("dash")->withSuccess('Great! You have Successfully logged in');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        
        if(Auth::check()){

            $blogs = Blog::all()->sortByDesc("created_at");




            return view('dash', ['blogs' => $blogs]);
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');



    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

    
}
