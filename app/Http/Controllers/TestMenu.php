<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu as MenuModel;
use Spatie\Menu\Link;
use Spatie\Menu\Menu;

class TestMenu extends Controller
{
    public function main()
    {
        $menus = MenuModel::all()->where('status', 'AC');
        $mainmenu = Menu::new()->addClass('nav-list');
        foreach ($menus as $menu) {
            $mainmenu->add(Link::to('#!', $menu->name));
            if ($menu->hasChild()) {
                foreach ($menu->items as $subitem) {
                    $mainmenu->add(
                        Menu::new()
                            ->link('#!', $subitem->name)->addClass('nav-dropdown')
                    );
                }
            }
        }
        return view('TestMenu')->with('menus', $mainmenu);
    }
}
