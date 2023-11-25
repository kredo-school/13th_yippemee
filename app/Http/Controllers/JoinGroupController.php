<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JoinGroup;
use Illuminate\Support\Facades\Auth;
use App\Models\Plan;

class JoinGroupController extends Controller
{
    private $JoinGroup;

public function __construct(JoinGroup $JoinGroup)
{
    $this->JoinGroup = $JoinGroup;
}

    public function store($plan_id)
{
    // Get the selected plan
    $selectedPlan = Plan::findOrFail($plan_id);

    // Check if the user has already joined the plan
    if ($selectedPlan->joinedUsers->contains(Auth::user())) {
        // User has already joined, handle accordingly (redirect, show message, etc.)
        return redirect()->back()->with('error', 'You have already joined this plan.');
    }

    // Create a new Join_Group record
    $joinGroup = JoinGroup::create([
        'user_id' => Auth::user()->id,
        'plan_id' => $selectedPlan->id,
    ]);

    // Handle successful join (redirect, show message, etc.)
    return redirect()->back()->with('success', 'You have successfully joined the plan.');
}

public function destory($plan_id)
{
    // Find the Join_Group record and delete it
    $this->JoinGroup->where('user_id', Auth::user()->id)->where('plan_id', $plan_id)->delete();

    // Redirect back to the previous page
    return redirect()->back()->with('success', 'You have successfully left the plan.');
}

}
