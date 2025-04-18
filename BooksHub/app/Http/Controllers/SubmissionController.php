<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use App\Models\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
{
    // 🟢 User: Submit competition entry
    public function store(Request $request, $competitionId)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);
    
        $competition = Competition::findOrFail($competitionId);
    
        // Ensure submission is within the time limit
        if (now()->greaterThan($competition->end_time)) {
            return back()->with('error', 'Submission time is over.');
        }
    
        // Store file in public/submissionFile/ directory
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = 'submissionFile/' . $fileName;
    
        // Move file to public/submissionFile/
        $file->move(public_path('submissionFile'), $fileName);
    
        // Save file path in database
        Submission::create([
            'competition_id' => $competitionId,
            'user_id' => Auth::id(),
            'file_path' => $filePath, // Store relative path
            'status' => 'Pending'
        ]);
    
        return back()->with('success', 'Submission successful.');
    }

    // 🟢 Admin: Select Winners (1st, 2nd, 3rd Place)
    public function selectWinners(Request $request, $competitionId)
{
    // Ensure the 'winners' field is not empty
    if (!$request->has('winners') || empty($request->winners)) {
        return back()->with('error', 'Please select winners before submitting.');
    }

    foreach ($request->winners as $rank => $submissionId) {
        if ($submissionId) {
            Submission::where('id', $submissionId)->update([
                'status' => 'Winner',
                'rank' => $rank + 1
            ]);
        }
    }

    return back()->with('success', 'Winners selected successfully.');
}
}