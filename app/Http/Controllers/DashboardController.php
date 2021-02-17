<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Month;

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

    public function youtube()
    {
    	$payments = Payment::where('item_id', 1)->orderBy('customer_id', 'asc')->get();
    	$months = Month::orderBy('in_number', 'asc')->get();
    	$customers = [];

    	foreach ($payments as $payment)
    	{
    		// if (!in_array($payment->customer->name, $customers))
    		// {
    		// 	$customers[$payment->customer->id] = $payment->customer->name;
    		// }

    		$customers[$payment->customer->name][] = $payment;
    	}
    	
    	return view('dashboards.youtube', compact('payments', 'months', 'customers'));
    }
}
