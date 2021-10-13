<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessBuild;
use App\Jobs\ProcessClone;
use App\Jobs\ProcessRun;
use App\Jobs\ProcessStop;
use App\Jobs\ProcessRemove;
use Illuminate\Http\Request;
use Illuminate\Database\Exception;
use App\Models\Project;
Use Auth;
use Illuminate\Queue\Queue;
use Illuminate\Support\Facades\Bus;
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
            $project->status = 'Building';
            $project->save();

            Bus::chain([
                new ProcessClone($project),
                new ProcessBuild($project)
            ])->dispatch();

            return redirect('/dashboard');
        } catch(\Exception $e) {
            Log::error($e->getMessage());
            return redirect('/dashboard')->with('error', 'Invalid input, please try again!');
        }
    }

    public function getProject(Request $request)
    {
        $project = Project::where("id", $request->id)->first();

        if (Session::has('error')) {
            return view('editProject')
                ->with("error", "Invalid input, please try again!")
                ->with("project", $project);
        } else {
            return view('editProject')
                ->with("project", $project);
        }
    }

    public function editProject(Request $request)
    {
        $project = Project::where("id", $request->id)->first();
        $projectList = Project::where('id', '!=', $project->id)
            ->pluck('port')
            ->toArray();
           $getProjects = Project::where("user_id", Auth::User()->id)
                       ->get();
        if (in_array($request->get('port'), $projectList)) {
            return redirect('/project/'.$project->id)
                ->with("error", "Invalid input, please try again!")
                ->with("projects", $getProjects);;
        } else {
            $project->title = $request->title;
            $project->build = $request->build;
            $project->link = $request->link;
            $project->branch = $request->branch;
            $project->port = $request->port;
            $project->status = 'Stopped';
            $project->update();

            return redirect('/dashboard')
                ->with("projects", $getProjects);
        }
    }

    public function removeProject(Request $request)
    {
        $project = Project::where("id", $request->id)->first();
        ProcessRemove::dispatch($project);

        return redirect('/dashboard');
    }

    public function startProject(int $projectId) {
        $project = Project::where('id', $projectId)->first();
        ProcessRun::dispatch($project);
        return redirect('/dashboard');
    }

    public function stopProject(int $projectId) {
        $project = Project::where('id', $projectId)->first();
        ProcessStop::dispatch($project);
        return redirect('/dashboard');
    }
}
