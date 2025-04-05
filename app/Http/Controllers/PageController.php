<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tabellone()
    {
        
        $trains = Train::all();
        return view('tabellone', compact('trains'));
    }

}