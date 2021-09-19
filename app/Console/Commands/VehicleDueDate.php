<?php

namespace App\Console\Commands;

use App\Models\Vehicle;
use Carbon\Carbon;
use Illuminate\Console\Command;

class VehicleDueDate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vehicle:send {date?} {--all}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send notification ';

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
        $date = !is_null($this->argument('date')) ? Carbon::parse($this->argument('date')) : null;

        $this->info('Execute command with date ' . $date);

        $vehicles = Vehicle::query()
            ->when(!is_null($date), function ($query) use ($date) {
                return $query->whereDate('effective_date', $date);
            })->get();

        //tinggal send disini    

        $this->info('done send ' . $vehicles->count() . ' data');

        return 0;
    }
}
