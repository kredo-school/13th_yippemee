<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    
    public function friends_list(Request $request)
    {
        $user = Auth::user();
        $query = $request->query('search');
        $users = User::query();

        # get the id of a user who is already a friend
        $friends_ids = $user->friends->pluck('id')->toArray();

        if ($query) {
            $users = $users->where(function ($q) use ($query) {
                $q->where('name', 'LIKE', '%' . $query . '%')
                  ->orWhere('username', 'LIKE', '%' . $query . '%');
            })
            # exclude users who are already friends
            ->whereNotIn('id', $friends_ids);
        }

        $users = $users->get();

        $addedFriends = $user->friends;

        return view('friends.friends_list', compact('users', 'addedFriends'));
    }

    public function index()
    {
        $users = User::all();
        $friends = $user->friends; 

        return view('friends.friends_list', compact('users'));
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        $query = $request->input('search');

        # get the id of a user who is already a friend
        $friends_ids = $user->friends->pluck('id')->toArray();

        $users = User::where(function ($q) use ($query) {
            $q->where('name', 'LIKE', '%' . $query . '%')
              ->orWhere('username', 'LIKE', '%' . $query . '%');
        })
        # exclude users who are already friends
        ->whereNotIn('id', $friends_ids)
        ->get();

        # get details of already added friends
        $addedFriends = $user->friends;

        return view('friends.friends_list', compact('users', 'addedFriends'));
        }

    public function addFriends(Request $request)
    {
        $selected_user_ids = $request->input('name');
        $user = Auth::user(); 

        foreach ($selected_user_ids as $friend_id) {
            # confirm they are not already friends
            if (!$user->friends()->where('friend_id', $friend_id)->exists()) {
                $user->friends()->attach($friend_id);
            }
        }

        return redirect()->route('friends.friends_list');
    }


    public function removeFriend($friend_id)
    {
        $user = Auth::user();

        # delete the friend relationship with the specified friend id
        $user->friends()->detach($friend_id);

        return redirect()->route('friends.friends_list');
    }


}
