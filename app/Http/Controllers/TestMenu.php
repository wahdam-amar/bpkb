<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class TestMenu extends Controller
{
    public function main()
    {
        $menus = Menu::all();
        return view('TestMenu')->with('menus', $menus);
    }
}
