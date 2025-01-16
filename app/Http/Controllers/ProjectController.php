<?php
namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        $projects = Project::where(function($query) use ($user) {
            $query->where('user_id', $user->id)
                  ->orWhereHas('users', function($q) use ($user) {
                      $q->where('users.id', $user->id);
                  });
        })
        ->withCount([
            'tasks as to_do_tasks' => function ($query) {
                $query->where('status', 'to_do');
            }, 
            'tasks as in_progress_tasks' => function ($query) {
                $query->where('status', 'in_progress');
            }, 
            'tasks as completed_tasks' => function ($query) {
                $query->where('status', 'completed');
            }
        ])
        ->get();
    
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|in:not_started,in_progress,completed',
            'budget' => 'nullable|numeric|min:0',
        ]);
    
        // Tambahkan user_id ke dalam data validasi
        $validatedData['user_id'] = Auth::id();
    
        // Buat proyek baru dengan user_id yang sudah dimasukkan
        $project = Project::create($validatedData);
    
        // Jika relasi many-to-many juga digunakan untuk tim, tambahkan pengguna ke tabel pivot
        $project->users()->attach(Auth::id());
    
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        $teamMembers = $project->users()->get();
        $users = User::all();
        return view('projects.show', compact('project', 'teamMembers', 'users'));
    }
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'status' => 'required|in:not_started,in_progress,completed',
            'budget' => 'nullable|numeric',
        ]);

        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        // Hapus data terkait di tabel project_teams
        $project->users()->detach();

        // Hapus proyek
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }


    public function addMember(Request $request)
    {
        $request->validate([
            'project_id' => 'required|exists:projects,id',
            'user_id' => 'required|exists:users,id',
        ]);
       
        $project = Project::find($request->project_id);
        $project->users()->attach($request->user_id);
        return redirect()->back()->with('success', 'User added successfully.');
    }
}
