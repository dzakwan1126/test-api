<?php

namespace App\Http\Controllers;

use app\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Untuk menampilkan data dari model User
    public function index(){
        return User::all();
    }

    //untuk menambahkan User
    public function create(Request $request){
        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return $user;
    }

    public function update(Request $request, $id)
    {
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;

        $user = User::find($id);
        $user->username = $username;
        $user->email = $email;
        $user->password = $password;
        $user->update();

        return $user;
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return $user;
    }
}
