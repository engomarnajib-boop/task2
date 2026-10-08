<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function store(StoreUserRequest $request){
   $user= User::query()->create($request->only(
        [
'name'=>$request->name,
'email'=>$request->email,
'password'=>$request->passmord
    ]
   ));

}



public function viewUser(){
$users = User::query()->get();
return view('viewUser',compact('users'));

}}


