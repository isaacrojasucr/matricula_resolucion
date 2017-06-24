<?php

namespace App\Http\Controllers;

use App\pwcnm_approval;
use App\pwcnm_inscriptionRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Mail;
use App\course;
use App\Mail\SendMail;

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
        session()->put('petition_actual',$petition);
        return view('inscription.admin.emailSending', compact('managerEmail', 'petition'));
    }

    public function store(Request $Request){

        $approval = pwcnm_approval::where('fk_inscription', '=',$Request->id)->get();

        $manager = app()->make('auth');
        $role = $manager->user()->role;

        $approval = $approval[0];

        if ($approval->stade = 0){
            $approval->stade = 1;
        }else if ($approval->stade = 2){
            $approval->stade = 3;
        }else if ($approval-> stade = 4) {
            $approval->stade = 5;
        }

        $approval->comments = $Request->emailContent;
        $approval->update();

        $course = pwcnm_inscriptionRequest::FindOrFail($Request->id);
        $course = course::FindOrFail($course->fk_course);
        $course = $course->name;

        session()->put('extra_message', 'Curso denegado: '.$course.".");

        session()->put('content_actual',$Request->emailContent);
        session()->put('receiver_actual', $Request->emailReceiver);
        session()->put('subject_actual', $Request->emailMotive);



        $this->send();



        if ($role==2){
            return redirect('proceso/coordinador');
        }else{
            return redirect('admin/matricula');
        }

    }

    public function send() {


        Mail::send(new sendMail());

    }




    public function __construct()
    {
        $this->middleware('auth');
    }



}
