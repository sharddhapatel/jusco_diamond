<?php

namespace App\Console\Commands;

use App\Models\machine;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:DemoCron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $time = DB::table('machine')->orderBy('created_at', 'desc')->first();
        // machine::where('created_at', '<=', Carbon::now()
        //     ->addHour($time->hours))
        //     ->where('accepted', '=', 0)
        //     ->update(['rejected' => 1, 'accepted' => 0, 'status' => 'Cancelled']);
        DB::table('machine')->where('created_at','<',Carbon::now()->subMinutes(1)->toDateTimeString())
        ->update(['status'=>'1']);
    }
}
