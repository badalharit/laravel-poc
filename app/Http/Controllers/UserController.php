<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{
    
    public function index(Request $request){
        $userDetails['username'] = $request->session()->get('username');
        $userDetails['email'] = $request->session()->get('email');
        $userDetails['name'] = $request->session()->get('name');
        
        return redirect()->route('ToDoHomePage');
    }
}
