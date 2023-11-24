<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class AdminPlansController extends Controller
{
    private $plan;

    public function __construct(Plan $plan)
    {
        $this->plan = $plan;
    }

    public function admin_plans_index()
    {
        $plans = Plan::withTrashed()->get();
        return view('admin.plans.index')->with('plans', $plans);
    }

    public function hide($id)
    {
        $this->plan->destroy($id);
        return redirect()->back();
    }

    public function unhide($id)
    {
        $this->plan->withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }

    public function search(Request $request)
    {
         $plans = Plan::whereHas('user', function ($query) use ($request) {
            $query->where('name','like','%' .$request->search. '%');
         })->get();

        return view('admin.plans.search')->with('plans',$plans)->with('search',$request->search);
    }
}
