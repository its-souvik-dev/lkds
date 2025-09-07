<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Exports\CandidateExport;
use Maatwebsite\Excel\Facades\Excel;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidates = Candidate::paginate(10);

        return view('candidate.index', [
            'candidates' => $candidates
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sections = Section::all();
        return view('candidate.create', compact('sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'registration' => 'required|string',
            'name' => 'required|string',
            'section' => 'required|string',
            'remarks' => 'required|integer|min:1|max:10'
        ]);

        try {
            Candidate::create($request->all());

            return redirect()->back()->with('status', 'Created Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['db_error' => 'Something went wrong while saving. Please try again.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate $candidate)
    {
        $sections = Section::all();
        return view('candidate.edit', compact('candidate', 'sections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidate $candidate)
    {
        $request->validate([
            'registration' => 'required|string',
            'name' => 'required|string',
            'section' => 'required|string',
            'remarks' => 'required|integer|min:1|max:10'
        ]);

        try {
            $candidate->update($request->all());

            return redirect()->back()->with('status', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['db_error' => 'Something went wrong while saving. Please try again.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate $candidate)
    {
        $candidate->delete();

        return redirect('/candidate')->with('status', 'Deleted Successfully');
    }

    public function export()
    {
        return Excel::download(new CandidateExport, 'candidates.xlsx');
    }
}
