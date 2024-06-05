<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function investor()
    {
        $investors = Investor::all();
        return view('admin.investor', compact('investors'));
    }
}
