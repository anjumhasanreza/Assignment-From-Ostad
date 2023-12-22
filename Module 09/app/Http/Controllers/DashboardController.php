<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
class DashboardController extends Controller
{
    public function index(){
        return view ("frontend.pages.index");
    }


    public function home(){
        return view ("frontend.pages.home");
    }
}
