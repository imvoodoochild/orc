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

class ProcessRemove implements ShouldQueue
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

        Log::info("Stopping project $projectname...");
        exec("docker-compose -f $folder/$projectname/docker-compose.yaml down");
        $this->project->isRunning = false;
        $this->project->status = 'Stopped';
        $this->project->update();
        Log::info("$projectname stopped...");
        exec("rmdir /s /Q $folder/$projectname");

        $this->project->delete();
        Log::info("$projectname removed...");
    }
}
