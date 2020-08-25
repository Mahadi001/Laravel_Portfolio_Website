<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use App\Service;

class PagesController extends Controller
{
    public function index(){
        $main = Main::first();
        $services = Service::all();
        return view('pages.index', compact('main','services'));
    }

    public function dashboard(){
        return view('pages.dashboard');
    }


}
