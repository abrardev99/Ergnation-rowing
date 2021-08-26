<?php

namespace App\Http\Controllers\Athlete;

use App\Http\Controllers\Controller;

class LeagueController extends Controller
{
    public function myLeagues()
    {
        $leagues = auth()->user()->athleteLeagues()->withCount('results')->get();
        return view('athlete.leagues.my-leagues', compact('leagues'));
    }
}
