<?php

namespace App\Http\Controllers;
use App\Models\flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index(){

        // ddd(Movie::all()); 
        $flights = flight::all();
        return view('packages.index', compact('flights'));
    }
    public function show(flight $news){
        return view('packages.news',compact('news'));
    }
}
