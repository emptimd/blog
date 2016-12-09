<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {

//        if ( ! Auth::user() )
//        {
//            \Redirect::to('/login')->send();
//        }else
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {

        if ( ! Auth::user() )
        {
            return redirect('login');
        }

        return view('la.dashboard');
    }
}
