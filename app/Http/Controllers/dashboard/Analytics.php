<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\ops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Analytics extends Controller
{
  public function index()
  {
    $totalOps = ops::count();

    // Calculate the total price of all ops
    $totalPrice = ops::sum('montant');

    // Calculate the total number of opss with regellement 'oui'
    $totalRegellementOui = ops::where('regellement', 'oui')->count();

    // Calculate the total number of opss with regellement 'non'
    $totalRegellementNon = ops::where('regellement', 'non')->count();

    $orderStatistics = DB::table('ops')
    ->select('type', DB::raw('count(*) as total_orders'))
    ->groupBy('type')
    ->get();
    // return view('ops.summary', compact('totalOps', 'totalPrice', 'totalRegellementOui', 'totalRegellementNon'))
    return view('content.dashboard.dashboards-analytics' ,compact('totalOps', 'totalPrice', 'totalRegellementOui', 'totalRegellementNon','orderStatistics'));
    
  }
}
