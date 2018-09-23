@extends('admin/default')
@section('content')
    <div class="row">
        <div class="box-body col-md-6">
            <div class="box-header with-border">
                <h3 class="box-title">Modifier un utilisateur</h3>
            </div>
            <div class="box-body">
                {!! BootForm::open()->action(route("users.update", array($user))) !!}
                {!! BootForm::hidden("_method")->value("put") !!}
                {!! BootForm::text("Nom", "nom")->placeholder("Entrer le nom de l'utilisateur")->required(true)->defaultValue($user->nom)!!}
                {!! BootForm::text("Prénom", "prenom")->placeholder("Entrer le prénom de l'utilisateur")->required(true)->defaultValue($user->prenom) !!}
                {!! BootForm::email("Email", "email")->placeholder("Entrer l'email de l'utilisateur")->required(true)->defaultValue($user->email) !!}
                {!! BootForm::password("Mot de passe", "password")->placeholder("Entrer le mot de passe de l'utilisateur")->required(true) !!}
                {!! BootForm::password("Confirmer le mot de passe", "password_confirmation")->placeholder("Confirmer le mot de passe de l'utilisateur")->required(true) !!}
                <input class="btn btn-primary pull-right " type="submit" value="Créer">
                {!! BootForm::close() !!}
            </div>
        </div>
    </div>
@endsection