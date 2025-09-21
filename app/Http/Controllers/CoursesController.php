<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $courses= Courses::all();
        return view('courses.index')->with('courses',$courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        Courses::create($input);
        return redirect('courses')->with('flash_message', 'Courses Addedd!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $course = Courses::find($id);
        return view('courses.show')->with('course',$course);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        $course = Courses::find($id);
        return view('courses.edit')->with('course',$course);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $course = Courses::find($id);
        $input = $request->all();
        $course->update($input);
        return redirect('courses')->with('flash_message', 'Course Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Courses::destroy($id);
        return redirect('courses')->with('flash_message', 'Course deleted!');
    }
}
