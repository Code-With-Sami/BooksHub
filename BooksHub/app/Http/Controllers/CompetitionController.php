<?php
namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    // 🟢 Show all active competitions (Users Side)
    public function index()
    {
        $competitions = Competition::where('is_active', true)->latest()->get();
        return view('competitions', compact('competitions'));
    }

    // 🟢 Show single competition details (Users Side)
    public function show($id)
    {
        $competition = Competition::findOrFail($id);
        return view('competition-show', compact('competition'));
    }

    // 🟢 Admin: Show all competitions (Admin Panel)
    public function adminIndex()
    {
        $competitions = Competition::latest()->get();
        return view('admin.view-competition', compact('competitions'));
    }

    // 🟢 Admin: Show create form
    public function create()
    {
        return view('admin.create-competitions');
    }

    // 🟢 Admin: Store new competition
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required|in:Essay Writing,Storytelling',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time'
        ]);

        Competition::create($request->all());
        return redirect()->route('admin.competitions.index')->with('success', 'Competition created successfully.');
    }

    // 🟢 Admin: Show competition details & submissions
    public function adminShow($id)
    {
        $competition = Competition::with('submissions.user')->findOrFail($id);
        return view('admin.competitions-show', compact('competition'));
    }
}
