<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessagingdetailsController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('view_settings');
        return view('dashboard.messagingdetails.show');
    }
}
