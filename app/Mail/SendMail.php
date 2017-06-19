<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Session\Session;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Http\Request;
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
    public function build()
    {
        $id = session()->get('id_actual');
        dd($id);
        $petition = pwcnm_inscriptionRequest::FindOrFail($id);

        return $this->view('inscription.admin.emailSending', compact($petition))->to('kevin.salazar@ucrso.info') ;
    }
}


/*['text'=>'inscription.admin.emailSending'], ['name', 'Kevin'], function ($message){
    $message->to('jorgeisaac.rojas@ucrso.info', 'Para Isaac')->subject('MOTIVO');
    $message->from('kreisoftwaredeveloptment@gmail.com', 'NOMBRE COORDINADOR');*/

