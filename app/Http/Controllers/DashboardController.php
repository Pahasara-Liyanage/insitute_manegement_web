<?php

namespace App\Http\Controllers;

use App\Models\SubjectModel;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        if(Auth::user()->is_role == 1)
        {
            $subjectCount=SubjectModel::count();
           return view('dashboard.admin_list')->with('subjectCount', $subjectCount);
        }
        else if(Auth::user()->is_role == 2)
        {
            return view('dashboard.user_list');
        }
    }
}
