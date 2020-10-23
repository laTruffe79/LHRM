<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function index()
    {
        $authUser = \Auth::user();
        $user = User::where('id','=',$authUser->id)->with(['activeWorkingTerms','employment'])->first();
        return view('dashboard',['user'=>$user]);
    }

}
