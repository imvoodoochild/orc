<?php

namespace App\Jobs;

use App\Models\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessBuild implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $project;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Project $project)
    {
        $this->project = $project;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $folder = env('REPO_DIR');
        $projectname = str_replace(" ", "", $this->project->title);
        if (file_exists("$folder/$projectname/Dockerfile")) {
            Log::info("Building project $projectname");
            exec("docker build -f $folder/$projectname/Dockerfile --build-arg DIR=./repos/$projectname/ -t $projectname .");
        } else {
            Log::info("This project does not have a dockerfile, will not build");
        }

        $this->project->isBuilt = true;
        $this->project->status = 'Stopped';
        $this->project->update();

        Log::info("$projectname built successfully...");
    }
}
