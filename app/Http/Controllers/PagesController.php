<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use App\Service;
use App\Portfolio;

class PagesController extends Controller
{
    public function index(){
        $main = Main::first();
        $services = Service::all();
        $portfolios = Portfolio::all();
        return view('pages.index', compact('main','services','portfolios'));
    }

    public function dashboard(){
        return view('pages.dashboard');
    }


}
