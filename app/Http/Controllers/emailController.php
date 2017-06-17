<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class emailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('inscription.admin.emailSending');
    }

/**
    public function __construct()
    {
        $this->middleware('auth');
    }
 * */
}
