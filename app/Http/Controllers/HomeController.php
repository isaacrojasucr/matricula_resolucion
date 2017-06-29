<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use phpDocumentor\Reflection\Types\Array_;

class HomeController extends Controller
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

        $process = \DB::select('SELECT InitialDate as inicial, FinalDate as final, 
                                IF(DATEDIFF(FinalDate, CURDATE()) < 0, 0, DATEDIFF(FinalDate, CURDATE())) as rest,
                                DATEDIFF(CURDATE(), InitialDate ) as spent
                                FROM pwcnm_registration_processes
                                order by id desc
                                LIMIT 1');



        $process = $process[0];


        $tt = \DB::select('SELECT COUNT(i.id) as ready
                            FROM pwcnm_inscription_requests as i
                            INNER JOIN pwcnm_approvals as a on a.fk_inscription = i.id
                            where a.stade > 0');

        $tt = $tt[0];

        $ii = \DB::select('SELECT COUNT(i.id) as ready
                            FROM pwcnm_inscription_requests as i
                            INNER JOIN pwcnm_approvals as a on a.fk_inscription = i.id
                            where a.stade = 0 and i.fk_career = 6;');

        $ii = $ii[0];

        $ie = \DB::select('SELECT COUNT(i.id) as ready
                            FROM pwcnm_inscription_requests as i
                            INNER JOIN pwcnm_approvals as a on a.fk_inscription = i.id
                            where a.stade = 0 and i.fk_career = 1;');

        $ie = $ie[0];

        $ef = \DB::select('SELECT COUNT(i.id) as ready
                            FROM pwcnm_inscription_requests as i
                            INNER JOIN pwcnm_approvals as a on a.fk_inscription = i.id
                            where a.stade = 0 and i.fk_career = 7;');

        $rn = \DB::select('SELECT COUNT(i.id) as ready
                            FROM pwcnm_inscription_requests as i
                            INNER JOIN pwcnm_approvals as a on a.fk_inscription = i.id
                            where a.stade = 0 and i.fk_career = 9;');

        $rn = $rn[0];

        $ef = $ef[0];

        $ri = \DB::select('SELECT COUNT(i.id) as ready
                            FROM pwcnm_inscription_requests as i
                            INNER JOIN pwcnm_approvals as a on a.fk_inscription = i.id
                            where a.stade = 0 and i.fk_career = 10;');

        $ri =$ri[0];

        $ecn = \DB::select('SELECT COUNT(i.id) as ready
                            FROM pwcnm_inscription_requests as i
                            INNER JOIN pwcnm_approvals as a on a.fk_inscription = i.id
                            where a.stade = 0 and i.fk_career = 11;');

        $ecn =$ecn[0];

        $te = \DB::select('SELECT COUNT(i.id) as ready
                            FROM pwcnm_inscription_requests as i
                            INNER JOIN pwcnm_approvals as a on a.fk_inscription = i.id
                            where a.stade = 0 and i.fk_career = 8;');

        $te = $te[0];

        $lq = \DB::select('SELECT COUNT(i.id) as ready
                            FROM pwcnm_inscription_requests as i
                            INNER JOIN pwcnm_approvals as a on a.fk_inscription = i.id
                            where a.stade = 0 and i.fk_career = 6;');

        $lq = $lq[0];

        $em = \DB::select('SELECT COUNT(i.id) as ready
                            FROM pwcnm_inscription_requests as i
                            INNER JOIN pwcnm_approvals as a on a.fk_inscription = i.id
                            where a.stade = 0 and i.fk_career = 2;');

        $em = $em[0];

        return view('home', compact('process','tt','ii','ie','ecn','em','te','lq','rn','ri','ef'));
    }
}
