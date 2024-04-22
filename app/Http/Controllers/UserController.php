<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {

        $users = User::where(['role' => 2])->orWhere(['role' => 3])->get();
        return view('admin.users.index', compact('users'));
    }
}
