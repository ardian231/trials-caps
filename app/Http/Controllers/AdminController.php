<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function ditolak()
    {
        // Logic for the 'ditolak' page
        return view('admin.ditolak');
    }

    public function diterima()
    {
        // Logic for the 'diterima' page
        return view('admin.diterima');
    }

    public function investor()
    {
        // Logic for the 'investor' page
        return view('admin.investor');
    }
}

