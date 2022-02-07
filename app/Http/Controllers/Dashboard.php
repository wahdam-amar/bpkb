<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function main()
    {
        $countFeedback = DB::table('feedback')->count();
        $negativeFeedback = DB::table('feedback')->where('sentiment', 'N')->count();
        $positiveFeedback = DB::table('feedback')->where('sentiment', 'P')->count();

        return view('dashboard')
            ->with('countFeedback', $countFeedback)
            ->with('negativeFeedback', $negativeFeedback)
            ->with('positiveFeedback', $positiveFeedback);
    }
}
