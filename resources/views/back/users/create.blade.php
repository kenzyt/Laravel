@extends('back/default')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <h3 class="box-title">Création d'un utilisateur</h3>
            </div>
            <div class="box-body">
                {!! BootForm::open()->action(route("users.store")) !!}
                {!! BootForm::text("Nom", "nom")->placeholder("Entrez le nom de l'utilisateur")->required(true) !!}
                {!! BootForm::text("Prénom", "prenom")->placeholder("Entrez le prénom de l'utilisateur")->required(true) !!}
                {!! BootForm::email("Email", "email")->placeholder("Entrez l'email de l'utilisateur")->required(true) !!}
                {!! BootForm::password("Mot de passe", "password")->placeholder("Entrez le mot de passe")->required(true) !!}
                {!! BootForm::password("Confirmez le mot de passe", "password_confirmation")->placeholder("Comnfirmez le mot de passe")->required(true) !!}
            </div>
        </div>
    </div>