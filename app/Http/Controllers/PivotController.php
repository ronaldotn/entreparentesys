<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PivotController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application pivot table.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pivotTable.pivot');
    }

    /**
     * Show the application pivot table import csv.
     *
     * @return \Illuminate\Http\Response
     */
    public function importCsv()
    {
        return view('pivotTable.importCsv');
    }
}