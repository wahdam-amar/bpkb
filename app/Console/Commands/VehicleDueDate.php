<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Vehicle;
use App\Models\Template;
use App\Services\TwelioService;
use Illuminate\Console\Command;
use Twilio\Exceptions\RestException;

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

        $app = (new TwelioService);

        $textMessage = Template::where('id', 1)->first();

        $this->info('Execute command with date ' . $date);

        $vehicles = Vehicle::with('person')
            ->when(!is_null($date), function ($query) use ($date) {
                return $query->whereDate('effective_date', $date);
            })->get();

        foreach ($vehicles as $vehicle) {
            $data = [
                '$name' => $vehicle->name,
                '$duedate' => $vehicle->effective_date
            ];

            try {
                $app->content($textMessage->content)
                    ->parseMessage($data)
                    ->send($vehicle->person->phone);
            } catch (RestException $th) {
                $this->info('Invalid ' . $vehicle->person->phone);
            }
        }

        $this->info('done send ' . $vehicles->count() . ' data');

        return 0;
    }
}
