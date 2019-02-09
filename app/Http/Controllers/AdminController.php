<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserRequest;

class AdminController extends Controller
{
    public function index(){
        return view('admin.welcome');
    }
    public function add(){
        return view('admin.add');
    }
    protected function store(UserRequest $request,User $user){
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return view('admin.welcome');
    }
    public function update(){
        return view('admin.update');
    }
    public function form(){
        return view('admin.form');
    }
}
