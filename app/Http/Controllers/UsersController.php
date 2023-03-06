<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function index(){
        return view('index');
    }

    // Display All Data 
    public function ShowData(){
        $users = Users::all();
        return response()->json($users);
    }

    // Display Data by Id
    public  function view(){

    }
    
    // Store Form Data
    public function store(Request $request)
    {
        $users = new Users();
        $users->Name = $request->post('name');
        $users->lastName = $request->post('lastName');
        $users->Email = $request->post('email');
        $users->Phone = $request->post('phone');
        $users->Addres = $request->post('address');
        $users->save();
        return $users ? "Data Inserted Successfully" : "Data Insert Failed";
    }

    // Edit Form Data
    public function edit(Request $request){
        # code...
    }

    // Delete Already Exited Data
    public function delete(Request $request){
        # code...
    }
}
