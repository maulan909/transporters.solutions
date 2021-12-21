<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.teams.index', [
            'title' => 'Teams',
            'team' => Team::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.add', [
            'title' => 'Add Team'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'linkedin' => 'max:255',
            'whatsapp' => 'max:20',
            'instagram' => 'max:255'
        ]);

        if (Team::insert($validatedData)) {
            return redirect()->to('teams')->with('team', 'Success add new team')->with('type', 'success');
        } else {
            return redirect()->to('teams')->with('team', 'Failed add new team')->with('type', 'danger');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.teams.edit', [
            'title' => 'Edit Team',
            'team' => $team
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'position' => 'required|max:255',
            'linkedin' => 'max:255',
            'whatsapp' => 'max:20',
            'instagram' => 'max:255'
        ]);

        if (Team::insert($validatedData)) {
            return redirect()->to('teams')->with('team', 'Success add new team')->with('type', 'success');
        } else {
            return redirect()->to('teams')->with('team', 'Failed add new team')->with('type', 'danger');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
