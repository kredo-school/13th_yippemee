<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genre;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SocialPostController;

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
        $all_genres = $this->genre->orderBy('updated_at', 'desc')->paginate(15);
        
        return view('admin.genres.index')
                ->with('all_genres', $all_genres);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:1|max:50|unique:genres,name'
        ]);

        $this->genre->name = ucwords(strtolower($request->name));
        $this->genre->save();

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'new_name' => 'required|min:1|max:50|unique:genres,name,' . $id
        ]);

        $genre = $this->genre->findOrFail($id);
        $genre->name = ucwords(strtolower($request->new_name));

        $genre->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $genre = Genre::find($id);
        $genre->delete();
        return redirect()->back();

    }


}