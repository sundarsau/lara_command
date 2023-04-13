<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateCourseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:course';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to create a course';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $controller = app()->make('App\Http\Controllers\TrainingController');
        app()->call([$controller,'createCourse']);
        echo "Course created";
    }
}
