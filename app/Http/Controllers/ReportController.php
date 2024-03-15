<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Dashboard');

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
#dd($validatedData);
        /*  $validatedData = $request->validate([
              'name' => 'required|max:255',
              'email' => 'required|email|unique:users',
              'password' => 'required|min:6',
          ]);*/

     /*  $validated= $request->validate([
            'title' => ['required', 'max:255'],
            'content' => ['required'],
            'init_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
        ]);*/
        $user_id =Auth::id();
        Report::create($validatedData + ['user_id' => $user_id]);


       # return Inertia::render('report/create');
      #  dd($validatedData);
      #  $user_id =Auth::id();
       # $validator->merge(['name' => 'Taylor Otwell']);


    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
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
}
