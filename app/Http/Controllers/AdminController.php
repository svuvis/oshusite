<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.admin.index')->with('name', Auth::user()->name);
    }

}
