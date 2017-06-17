<?php

namespace App\Http\Controllers;

use App\pwcnm_approval;
use App\pwcnm_inscriptionRequest;
use Illuminate\Http\Request;
use Mail;

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

        $approval = pwcnm_approval::where('fk_inscription', '=',$Request->id)->get();
        $approval = $approval[0];

        $approval->stade = 1;
        $approval->comments = $Request->emailContent;
        $approval->update();
        $this->send();
        return redirect('proceso/coordinador');
    }

    public function send() {
        Mail::send(['text'=>'mail'], ['name', 'Kevin'], function ($message){
            $message->to('jorgeisaac.rojas@ucrso.info', 'Para Isaac')->subject('MOTIVO');
            $message->from('kreisoftwaredeveloptment@gmail.com', 'NOMBRE COORDINADOR');
        });
        dd('PRUEBA');
    }


    public function __construct()
    {
        $this->middleware('auth');
    }

}
