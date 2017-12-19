<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Auth::check()) {
            $data['data'] = \Auth::user();
            if ($data['data']->roletype == 0) {
                $users = \DB::table('users')->get();
                return view('admin')->with('users', $users);
            }
        }

        echo "Permission Denied";
    }
}
