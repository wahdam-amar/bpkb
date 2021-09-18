<?php

namespace App\Http\Controllers;

use App\Services\Indodax;
use Illuminate\Http\Request;


class Dashboard extends Controller
{
    public function main()
    {
        return view('dashboard');
    }
}
