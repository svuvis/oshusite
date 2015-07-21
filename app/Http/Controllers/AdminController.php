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
        $user = Auth::user();
        $username = $user->name;
        return view('pages.admin.index')->with('name',$username);
    }

}
