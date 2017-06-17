<?php

namespace App\Http\Controllers;

use App\pwcnm_approval;
use App\pwcnm_inscriptionRequest;
use Illuminate\Http\Request;

class emailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function opening($id)
    {
        $petition = pwcnm_inscriptionRequest::FindOrFail($id);

        $manager = app()->make('auth');
        $managerEmail = $manager->user()->email;

        return view('inscription.admin.emailSending', compact('managerEmail', 'petition'));
    }

    public function store(Request $Request){

        $approval = pwcnm_approval::FindOrFail($Request->id);

        $approval->stade = 1;
        $approval->comments = $Request->emailContent;
        $approval->update();

        return redirect('admin/usuarios');
    }



    public function __construct()
    {
        $this->middleware('auth');
    }

}
