<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('dashboard.list');
    }
    public function create(){
        return view('dashboard.create');
    }
    public function edit(){
        return view('dashboard.edit');
    }
    public function login(){
        return view('dashboard.login');
    }
    public function register(){
        return view('dashboard.register');
    }

    
}
