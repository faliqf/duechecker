<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class DashboardController extends Controller
{
    public function index()
    {
        $payments = Payment::all();

        return view('dashboards.index',compact('payments'));
    }

    public function admin()
    {
    	return view('dashboards.admin');
    }
}
