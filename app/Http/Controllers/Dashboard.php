<?php

namespace App\Http\Controllers;

use App\Services\Indodax;
use Illuminate\Http\Request;


class Dashboard extends Controller
{
    public function main(Indodax $app)
    {
        debug($app->tradehistory());

        return view('asset');
    }
}
