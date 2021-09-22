<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;


class Dashboard extends Controller
{
    public function main()
    {

        $sid = env('TWELIO_SID');
        $token = env('TWELIO_TOKEN');
        $client = new Client($sid, $token);

        $client->messages->create(
            // the number you'd like to send the message to
            'whatsapp:+6289637058723',
            [
                // A Twilio phone number you purchased at twilio.com/console
                'from' => 'whatsapp:+14155238886',
                // the body of the text message you'd like to send
                'body' => 'Test Custom'
            ]
        );

        $personCount = DB::table('person')->count();
        $vehicleCount = DB::table('vehicle')->count();
        $todayVehicle = DB::table('vehicle')->whereDate('effective_date', today())->count();

        return view('dashboard')
            ->with('today_vehicle', $todayVehicle)
            ->with('person', $personCount)
            ->with('vehicle', $vehicleCount);
    }
}
