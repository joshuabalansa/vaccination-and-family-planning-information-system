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
     * deactivate the user
     *
     * @param object $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deactivate(User $user) {

        try {

            $user->status = 'inactive';

            if($user->save()) {

                return redirect()->back()->with('success', 'User has beed deactivate successfuly');
            }

        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Opps! Something went wrong. ' . $e->getMessage());
        }
    }

    /**
     * reactivate a user
     *
     * @param object $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function reactivate(User $user) {

        try {

            $user->status = 'active';

            if ($user->save()) {

                return redirect()->back()->with('success', 'User has beed deactivate successfuly');
            }

        } catch (\Exception $e) {

            return redirect()->back()->with('error', 'Opps! Something went wrong. ' . $e->getMessage());
        }
    }
}
