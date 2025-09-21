<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $enrollments = Enrollment::all();
        return view('enrollments.index')->with('enrollments',$enrollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $batch = Batch::pluck('name','id');
        $student = Student::pluck('name','id');
        return view('enrollments.create',compact('batch','student'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollments')->with('flash_message', 'Enrollment Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $enrollment = Enrollment::find($id);
        return view('enrollments.show')->with('enrollment',$enrollment);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $enrollment = Enrollment::find($id);
        return view('enrollments.edit')->with('enrollment',$enrollment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $enrollment = Enrollment::find($id);
        $input = $request->all();
        $enrollment->update($input);
        return redirect('enrollments')->with('flash_message', 'Enrollment Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message', 'Enrollment deleted!');
    }
}
