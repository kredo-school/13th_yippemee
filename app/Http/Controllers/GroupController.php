<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GroupController extends Controller
{
    private $group;

    public function __construct(Group $group)
    {
        $this->group = $group;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Group()
    {
        $groups = Group::all();
        return view('users.calendars.private.group_list')
                ->with('groups', $groups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_groups = $this->group->all();

        return view('users.modals.add_group')
            ->with('all_groups', $all_groups);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>  'required|min:1|max:30',
            // restaurant/member_id will be array later
            'restaurant_id' =>  'required|min:1|max:30',
            'member_id'     =>  'required|min:1|max:30',
            'image'         =>  'mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        // save
        $this->group->name          =   $request->name;
        $this->group->restaurant_id =   $request->restaurant_id;
        $this->group->member_id     =   $request->member_id;

        // $this->group->image         =   'data:image/' . $request->image->extension() . ';base64,' . base64_encode(file_get_contents($request->image));

        // save images in a separated directory↓↓
        // $this->group->image         = $request->file('image');
        // $this->group->image->move(base_path('\storage\images'), $this->group->image->getClientOriginalName());
        // dd($request->file('image')->getClientOriginalName());
        // $file = $request->file('image');
        // $file->move('storage/images/', $file->getClientOriginalName()); move uploaded file to directoy 'storage/images/ before put the path in DB
        // $this->group->image = 'storage/images/' . $file->getClientOriginalName();

        $file = $request->file('image');
        $this->group->image = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('storage/images/'), $this->group->image);

        $this->group->save();

        return redirect()->route('group_list');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = $this->group->findOrFail($id);

        return view('group_list')
            ->with('group', $group);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // if you are member of this group...
        $group = $this->group->findOrFail($id);

        return view('group_list')
            ->with('group', $group);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'          => 'sometimes|max:30',
            'restaurant_id' => 'sometimes|max:30',
            'image'         => 'sometimes|mimes:jpeg,jpg,png,gif|max:2048' // 'sometimes' indicates the field is not always required
        ]);

        $group = Group::findOrFail($id); // Directly using Group model
        if ($request->has('name') && $request->name != null) {
            $group->name = $request->name;
        }
        if ($request->has('restaurant_id') && $request->restaurant_id != null) {
            $group->restaurant_id = $request->restaurant_id;
        }
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $this->group->image = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/images/'), $group->image);
        }

        $group->save();

        return redirect()->route('group_list');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $group = $this->group->findOrFail($id);
        // $group->forceDelete();


        // $group = Group::findOrFail($id);
        // $group->delete();

        // $this->group->image = $file->getClientOriginalName();
        // $file->delete(public_path('storage/images/'), $this->group->image);

        $group = Group::find($id);
        // Storage::delete(public_path('storage/images/1700046843_giphy.gif'));
        unlink(public_path('storage/images/' . $group->image));
        $group->delete();


        return redirect()->route('group_list');
    }
}
