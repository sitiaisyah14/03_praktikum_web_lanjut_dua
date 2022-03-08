<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodMenu;

class FoodMenuController extends Controller
{
    public function foodmenu(){
        $data = FoodMenu::all();
        return view ('foodmenu', ['daftarmenu'=>$data]);
    }
}
