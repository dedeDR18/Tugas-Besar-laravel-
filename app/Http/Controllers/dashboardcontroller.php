<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class dashboardcontroller extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    	$this->middleware('role:admin');
    }

    public function index()
    {
    return view('admin.dashboard'); 
    }

    public function show()
    {
    	$tampilkan = users::all();
    	return view('admin.dashboard', ['tampilkan' => $tampilkan]);
    }
}
