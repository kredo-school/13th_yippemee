<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SocialPostController;
use App\Models\SocialPost;

class AdminGenreController extends Controller
{
    private $genre;
    private $social_post;

    public function __construct(Genre $genre, SocialPostController $social_post)
    {
        $this->genre = $genre;
        $this->social_post = $social_post;
    }


    public function admin_genres_index(Request $request)
    {
        $all_genres = Genre::with('social_posts')->orderBy('updated_at', 'desc')->paginate(20);
        
        $uncategorized_count = SocialPost::doesntHave('genres')->count();

        return view('admin.genres.index', compact('all_genres', 'uncategorized_count'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:1|max:50|unique:genres,name',
            'image' => 'mimes:jpg,png,jpeg,gif|max:1048',
        ]);

        $genre = new Genre();
        $genre->name = ucwords(strtolower($request->name));
        
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $genre->image = 'images/' . $imageName;
        
        }
        
        $genre->save();

        return redirect()->back();
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'new_name' => 'required|min:1|max:50|unique:genres,name,' . $id,
            'image' => 'sometimes|mimes:jpg,png,jpeg,gif|max:1048', // sometimes を使用して、画像がオプションであることを指定
        ]);

        $genre = $this->genre->findOrFail($id);
        $genre->name = ucwords(strtolower($request->new_name));

        
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $genre->image = 'images/' . $imageName;
        }
        
        $genre->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $genre = Genre::find($id);
        $genre->delete();
        return redirect()->back();

    }

    public function search(Request $request)
    {
         $genres = Genre::where('name','like','%' .$request->search. '%')->get();

        return view('admin.genres.search')->with('genres',$genres)->with('search',$request->search);
    }


}
