<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ListComment;
use Illuminate\Support\Facades\Auth;

class ListCommentController extends Controller
{

    private $listComment;

    public function __construct(ListComment $listComment){
        $this->listComment = $listComment;
    }

    public function commentstore(Request $request, $restaurant_id)
    {
        $request->validate([
            'body' . $restaurant_id => 'required|max:150',
            'rate' => 'required',
            'title' => 'required|min:1|max:100',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:1048',
            'price' => 'required',
        ]);

        
        $this->listComment->body = $request->input('body' . $restaurant_id);
        $this->listComment->rate = $request->rate;
        $this->listComment->title = $request->title;
        $this->listComment->price = $request->price;
        $this->listComment->image = 'data:image/' . $request->file('image')->getClientOriginalExtension() . ';base64,' . base64_encode(file_get_contents($request->file('image')->getRealPath()));
        $this->listComment->user_id = Auth::user()->id;
        $this->listComment->restaurant_id = $restaurant_id;
        $this->listComment->save();

        return redirect()->route('restaurantlist');
    }
}
