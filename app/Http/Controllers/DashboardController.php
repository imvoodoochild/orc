<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Exception;
use App\Models\Project;
Use Auth;
use Session;
use Log;

class DashboardController extends Controller
{
    public function getDashboard(Request $request) {
        $getProjects = Project::where("user_id", Auth::User()->id);

        if($request->has('search')) {
            $getProjects = $getProjects
                ->where('title', 'like', '%'.$request->get('search').'%');
        }

        $getProjects = $getProjects->get();
        return view('dashboard')
            ->with("error", Session::get("error"))
            ->with("projects", $getProjects)
            ->with('search', $request->get('search'));
    }

    public function addProject(Request $request)
    {
        try {
            $project = new Project;
            $project->user_id = Auth::User()->id;
            $project->title = $request->title;
            $project->build = $request->build;
            $project->link = $request->link;
            $project->branch = $request->branch;
            $project->port = $request->port;
            $project->key = $request->key;
            $project->status = 'Stopped';
            $project->save();
            return redirect('/dashboard');

        } catch(\Exception $e) {
            Log::error($e->getMessage());
            return redirect('/dashboard')->with('error', 'Invalid input, please try again!');
        }

    }

    public function getProject(Request $request)
    {
        $project = Project::where("id", $request->id)->first();
        
        return view('editProject')->with("project", $project);
    }

    public function editProject(Request $request)
    {
        $project = Project::where("id", $request->id)->first();

        $project->title = $request->title;
        $project->build = $request->build;
        $project->link = $request->link;
        $project->branch = $request->branch;
        $project->port = $request->port;
        $project->key = $request->key;
        $project->status = 'Stopped';
        $project->update();

        return redirect('/dashboard');
    }

    public function removeProject(Request $request)
    {
        $project = Project::where("id", $request->id)->delete();
        return redirect('/dashboard');
    }
}
