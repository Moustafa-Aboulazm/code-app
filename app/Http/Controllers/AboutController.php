<?php

namespace App\Http\Controllers;

use App\Models\Team;

class AboutController extends Controller
{
    public function __invoke()
    {
        return view('user.about.about', [
            'teams' => Team::all(),
        ]);
    }
}
