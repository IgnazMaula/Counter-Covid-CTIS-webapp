<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestKit;
use DB;

class ReportController extends Controller
{
    function generateReport() {
        $data['covidTests'] = DB::table('covid_tests')->get();
        $pdf = \PDF::loadView('manager.testReport', $data)->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('testReport.pdf');
    }
}
