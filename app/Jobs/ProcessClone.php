<?php

// Programmer name: Ms. Mariyam Malika Asim, TP056480, BSc. (Hons) in Computer Science, Asia Pacific University (APU), Technology Park Malaysia
// Program name: ProcessClone.php
// Description: To provide the queue process for cloning a Git project locally.
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

class ProcessClone implements ShouldQueue
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
        $repo = $this->project->link;
        $branch = $this->project->branch;
        $folder = env('REPO_DIR');
        $projectname = str_replace(" ", "", $this->project->title);

        Log::info("Cloning project into $folder...");
        exec("git clone --branch $branch $repo $folder/$projectname");
        Log::info("Getting project from $repo");
        $this->project->isCloned = true;
        $this->project->update();

        if (!file_exists("$folder/$projectname")) {
            Log::info("Removed the failed project $projectname");
            $this->project->delete();
        }

        Log::info("Done cloning project $repo");
    }
}
