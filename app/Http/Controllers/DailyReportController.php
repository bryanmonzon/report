<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DailyReportController extends Controller
{
    
    public function show()
    {
        $report = request()->user()->reports()->firstOrCreate([
            'report_date' => now()->startOfDay()
        ]);


        return view('daily-report', ['report' => $report]);
    }
}
