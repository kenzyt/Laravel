<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
            return view("login/stillLog");
        else
            return view("login/index");
    }


    public function connexion(Request $request)
    {
        $input = $request->all();
        if (isset($input['remember']) && $input["remember"] == true)
            Auth::attempt(array('email' => $input['email'], 'password' => $input['password'], true));

        else
            Auth::attempt(array('email' => $input['email'], 'password' => $input['password']));

        if (Auth::check())
        {
            $current = User::where('login' == $input['login']);
            $session = $current->toArray();
            return redirect(route('users.index'))->with("success", "Vous êtes connecté");
        }

        else
            return redirect(route('login'))->with("danger", "La combinaison email/mot de passe est incorrect");
    }

    public function deconnexion()
    {
        Auth::logout();
        return redirect(route('login'))->with("info", "Vous vous êtes déconnecté");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
