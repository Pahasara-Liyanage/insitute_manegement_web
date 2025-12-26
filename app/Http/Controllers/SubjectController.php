<?php

namespace App\Http\Controllers;

use App\Models\SubjectModel;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $subject = SubjectModel::all();
        return view('subject.list')->with('subject', $subject);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $subject = new SubjectModel();
        $subject->subject_name = $request->subject_name;
        $subject->save();
        return redirect('/admin/Subject');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'subject_name' => 'required|string|max:255',
        ]);

        $subject = SubjectModel::find($id);
        if (! $subject) {
            return redirect('/admin/Subject')->with('error', 'Subject not found.');
        }

        $subject->subject_name = $validated['subject_name'];
        $subject->save();

        return redirect('/admin/Subject')->with('success', 'Subject updated successfully.');
    }

    /**
     *  Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subjectToDelete = SubjectModel::find($id);
        $subjectToDelete->delete();
        return redirect('/admin/Subject');
    }
}
