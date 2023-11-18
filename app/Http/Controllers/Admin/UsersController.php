<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
       $this->user = $user;
    }

    public function admin_users_index()
    {
        $users = User::withTrashed()->get();

        return view('admin.users.index')->with('users', $users);
    }

    public function deactivate($id)
    {
        $this->user->destroy($id);

        return redirect()->back();
    }

    public function activate($id)
    {
        $this->user->withTrashed()->findOrFail($id)->restore();

        return redirect()->back();
    }

     public function search(Request $request)
    {
         $users = User::where('name','like','%' .$request->search. '%')->get();

        return view('admin.users.search')->with('users',$users)->with('search',$request->search);
    }

    public function friends()
    {
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id');
    }


}
