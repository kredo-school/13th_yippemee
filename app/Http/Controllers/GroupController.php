<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

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
        return view('users.calendars.private.group_list')->with('groups', $groups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_groups = $this->group->all();

        return View('users.modals.add_group')
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
            'image'         =>  'required|mimes:jpeg,jpg,png,gif|max:1048'
        ]);

        // save
        $this->group->name          =   $request->name;
        $this->group->restaurant_id =   $request->restaurant_id;
        $this->group->member_id     =   $request->member_id;
        $this->group->image         =   'data:image/' . $request->image->extension() . ';base64,' . base64_encode(file_get_contents($request->image));
        $this->group->save();

        // $newGroup = Group::create([
        //     'name'        => $request->name,
        //     'restaurant_id' => $request->restaurant_id,
        //     'image'          => 'data:image/' . $request->image->extension() . ';base64' . base64_encode(file_get_contents($request->image)),
        //     'member_id' => $request->member_id,
        // ]);

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
            'name'          =>  'required|min:1|max:30',
            // restaurant/member_id will be array later
            'restaurant_id' =>  'required|min:1|max:30',
            'image'         =>  'mimes:jpeg,jpg,png,gif|max:1048'
        ]);

        $group                  =   $this->group->findOrFail($id);
        $group->name            =   $request->name;
        $group->restaurant_id   =   $request->restaurant_id;

        if ($request->image) {
            $group->image       =   'data:image/' . $request->image->extension() . ';base64,' . base64_encode(file_get_contents($request->image));
        }

        $group->save();

        return redirect()->route('group.show', $id);
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


        $group = Group::find($id);
        $group->delete();

        return redirect()->route('group_list');
    }
}
