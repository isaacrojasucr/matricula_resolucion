<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    /**
     * Display a listing of the resource
     *
     * @return Response
     */
    public function index(){
        //
    }

    /**
     * Show the form for creating a new resource
     *
     * @return Response
     */
    public function create(){
        return view('users.user.create');
    }

    /**
     * Store a newly created resource in storage
     *
     * @return Response
     */
    public function store(Request $Request){
        $user = new User();

        $user->name = $Request->name;
        $user->lastname = $Request->lastname;
        $user->password = Hash::make($Request->password);
        $user->email = $Request->email;
        $user->role = 1;
        $user->save();

        return view('users.user.create');
    }

    public function edit($id)
    {
        $user = user::findOrFail($id);

        return view('users.user.update', compact('user'));
    }

    public function update($id, Request $Request)
    {

        $user = user::findOrFail($id);

        $user->name = $Request->name;
        $user->lastname = $Request->lastname;
        $user->password = Hash::make($Request->password);
        $user->email = $Request->email;
        $user->role = 1;


        $user->update();


        return redirect('users/user/3/edit');
    }
}
