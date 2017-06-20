<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Session\Session;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\request;
use App\pwcnm_registration_process;
use App\pwcnm_inscriptionRequest;
use App\course;
use App\carrer;
use Illuminate\Support\Facades\Input;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request)
    {


        $temporalContent = session()->get('content_actual');
        $temporalReceiver = session()->get('receiver_actual');
        $temporalMotive = session()->get('subject_actual');

        return $this->view('textmail', ['emailContent'=>$temporalContent])->to($temporalReceiver)->subject($temporalMotive);
    }


}


/*['text'=>'inscription.admin.emailSending'], ['name', 'Kevin'], function ($message){
    $message->to('jorgeisaac.rojas@ucrso.info', 'Para Isaac')->subject('MOTIVO');
    $message->from('kreisoftwaredeveloptment@gmail.com', 'NOMBRE COORDINADOR');*/

