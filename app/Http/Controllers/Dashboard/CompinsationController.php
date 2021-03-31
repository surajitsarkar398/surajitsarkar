<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Http\Request;

class CompinsationController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('view_settings');
        return view('dashboard.compinsation.create');
    }
}
