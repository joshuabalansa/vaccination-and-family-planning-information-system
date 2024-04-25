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

    /**
     * @param object $user
     */
    public function deactivate(User $user) {

        try {

            $user->update(['status' => 'inactive']);

            return redirect()->back()->with('success', 'User has beed deactivate successfuly');

        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Opps! Something went wrong. ' . $e->getMessage());
        }

    }

    public function reactivate(User $user) {

        try {

            $user->update(['status' => 'active']);

            return redirect()->back()->with('success', 'User has beed deactivate successfuly');

        } catch (\Exception $e) {


            return redirect()->back()->with('error', 'Opps! Something went wrong. ' . $e->getMessage());
        }
    }
}
