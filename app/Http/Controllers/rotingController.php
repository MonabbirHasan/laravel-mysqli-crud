<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateUser;

class rotingController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function add()
    {
        return view('add');
        
    }
    public function insert(Request $request)
    {
        $create = new CreateUser();
        $create->name = $request['name'];
        $create->email = $request['email'];
        $create->phone = $request['phone'];
        $create->address = $request['address'];
        $create->city = $request['city'];
        $create->state = $request['state'];
        $create->gender = $request['gender'];
        $create->date = $request['date'];
        $create->status = $request['status'];
        $create->save();
        return redirect('view');
    }
    public function view(Request $request)
    {
        $data = CreateUser::all();
        $users = compact('data');
        return view('view')->with($users);
    }
    public function DeleteUser($id)
    {
        CreateUser::find($id)->delete();
        return redirect('view');
    }
    public function update($id)
    {
        $userData = CreateUser::find($id);
        if (is_null($userData)) {
            return redirect('view');
        } else {
            $updateData = compact('userData');
            return view('updatepage')->with($updateData);
        }
    }
    public function updatedata($id, Request $request)
    {
        $create = CreateUser::find($id);
        $create->name = $request['name'];
        $create->email = $request['email'];
        $create->phone = $request['phone'];
        $create->address = $request['address'];
        $create->city = $request['city'];
        $create->state = $request['state'];
        $create->gender = $request['gender'];
        $create->date = $request['date'];
        $create->status = $request['status'];
        $create->save();
        return redirect('view');
    }
}
