<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestKit;
use DB;

class ReportController extends Controller
{
    function generateReportManager() {
        $data['covidTests'] = DB::table('covid_tests')->get();
        $pdf = \PDF::loadView('manager.testReport', $data)->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('Manager-test-report.pdf');
    }

    function generateReportTester() {
        $data['covidTests'] = DB::table('covid_tests')->get();
        $pdf = \PDF::loadView('tester.testReport', $data)->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('Tester-test-report.pdf');
    }
}
