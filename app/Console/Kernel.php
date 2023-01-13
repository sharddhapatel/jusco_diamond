<?php

namespace App\Console;

use App\Console\Commands\DemoCron;
use App\Models\machine;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Carbon;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        
        Commands\DemoCron::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    // protected function schedule(Schedule $schedule)
    // {
    //     // $schedule->command('inspire')->hourly();
    // }
    protected function schedule(Schedule $schedule)
    {
        // $schedule->job(new DemoCron)
        // ->everyMinutes() //this and below additions you can check from docs
        // ->unlessBetween('10:35', '7:00')
        // ->withoutOverlapping(10);
        DB::table('machine')->where('created_at','<',Carbon::now()->subMinutes(1)->toDateTimeString())
        ->update(['status'=>'1']);
    }
    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
        
    }
}
