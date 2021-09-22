<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;


class Dashboard extends Controller
{
    public function main()
    {

        $personCount = DB::table('person')->count();
        $vehicleCount = DB::table('vehicle')->count();
        $todayVehicle = DB::table('vehicle')->whereDate('effective_date', today())->count();

        return view('dashboard')
            ->with('today_vehicle', $todayVehicle)
            ->with('person', $personCount)
            ->with('vehicle', $vehicleCount);
    }
}
