<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$users = User::FindOrFail(1);
        $tags = $users->tags()->get();
        return view("front/users/index", compact("users", "tags"));*/

        $users = User::get();
        $users->load("tags");
        $users->load("commentaires");
        return view("admin/users/index", compact("users"));  //on passe users en variable
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()  //url pour créer un user
    {
        return view("admin/users/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $this->validate($request, User::$rules["create"]);
        $status_create = User::create($input);
        if($status_create)
            return redirect(route('admin.index', $status_create))->with("success", "Le compte à bien été créé");
        else
            return redirect()->back()->with("danger", "Une erreur est survenue. Veuillez recommencer.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view("admin/users/show", compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        dd();
        return view("admin/users/edit", compact("user"));
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
        $input = $request->all();
        $this->validate($request, User::$rules["update"]);
        $status_create = User::create($input);
        if($status_create)
            return redirect(route('admin/users/edit', $status_create))->with("success", "Le compte à bien été modifié");
        else
            return redirect()->back()->with("danger", "Une erreur est survenue. Veuillez recommencer.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = User::destroy($id);
        if($count == 1)
            return redirect()->back()->with("success", "L'utilisateur à bien été supprimé.");
        else
            return redirect()->back()->with("danger", "L'utilisateur n'a pas été supprimé.");
    }
}
