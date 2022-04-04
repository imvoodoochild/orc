<?php

// Programmer name: Ms. Mariyam Malika Asim, TP056480, BSc. (Hons) in Computer Science, Asia Pacific University (APU), Technology Park Malaysia
// Program name: ProcessStop.php
// Description: To provide the queue process for stopping a Git project from running locally.
// First written on: 07/10/2021
// Edited on: 13/10/2021

namespace App\Jobs;

use App\Models\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessStop implements ShouldQueue
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
        Log::info("Running project $projectname...");
        if (file_exists("$folder/$projectname/docker-compose.yaml")) {
            Log::info("Found docker-compose.yaml");
            $composeFile = "docker-compose.yaml";
        } else {
            Log::info("Setting docker-compose file with format yml");
            $composeFile = "docker-compose.yml";
        }
        exec("docker-compose -f $folder/$projectname/$composeFile down");
        $this->project->isRunning = false;
        $this->project->status = 'Stopped';
        $this->project->update();
        Log::info("$projectname stopped...");
    }
}
