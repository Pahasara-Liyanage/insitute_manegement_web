<?php

namespace App\Http\Controllers;

use App\Models\SubjectModel;
use App\Models\TeacherModel;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sub = SubjectModel::all();
        $teachers = TeacherModel::with('subject')->get();
        return view('teacher.list')->with(['sub' => $sub, 'teachers' => $teachers]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sub = SubjectModel::all();
        return view('teacher.create')->with('sub', $sub);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // If there are no subjects, provide a clear error rather than a validation failure
        if (SubjectModel::count() === 0) {
            return redirect()->back()->withInput()->with('error', 'Please create at least one subject before adding a teacher.');
        }

        $data = $request->validate([
            'teacher_fname' => 'required|string|max:255',
            'teacher_lname' => 'required|string|max:255',
            'teacher_email' => 'required|email|max:255',
            'teacher_phone' => 'nullable|string|max:50',
            'teacher_nic' => 'nullable|string|max:50',
            'subject_model_id' => 'required|exists:subject_models,id',
        ]);

        try {
            TeacherModel::create($data);
            return redirect('/admin/teacher')->with('success', 'Teacher created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Failed to create teacher: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = TeacherModel::with('subject')->findOrFail($id);
        return view('teacher.show')->with('teacher', $teacher);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = TeacherModel::findOrFail($id);
        $sub = SubjectModel::all();
        return view('teacher.edit')->with(['teacher' => $teacher, 'sub' => $sub]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'teacher_fname' => 'required|string|max:255',
            'teacher_lname' => 'required|string|max:255',
            'teacher_email' => 'required|email|max:255',
            'teacher_phone' => 'nullable|string|max:50',
            'teacher_nic' => 'nullable|string|max:50',
            'subject_model_id' => 'required|exists:subject_models,id',
        ]);

        $teacher = TeacherModel::findOrFail($id);
        $teacher->update($data);

        return redirect('/admin/teacher')->with('success', 'Teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = TeacherModel::findOrFail($id);
        $teacher->delete();
        return redirect('/admin/teacher')->with('success', 'Teacher deleted');
    }
}
