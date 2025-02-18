<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class DashboardController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('dashboard.index', ['tags' => $tags]);
    }
}
