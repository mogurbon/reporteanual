<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Notifications\ReportNotify;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $user_id = Auth::id();
        $reports = User::find($user_id)->reports()->get();


        return Inertia::render('Dashboard',['reports' => $reports]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'init_date' =>'required|date',
            'end_date' =>'required|date'
        ]);

        $user_id =Auth::id();
        Report::create($validatedData + ['user_id' => $user_id]);


        return to_route('dashboard');

    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {


        return Inertia::render('Show',compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }

    public function report_to_pdf(Report $report)
    {

        $pdf = app('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);

        $pdf->loadView('report', compact('report'));
        return $pdf->stream('reporte.pdf');
    }

}
