@extends('admin/default')
@section("content")
    <div>
        <p>Vous êtes déjà connecté</p>
        <a href="{{ route("deconnexion") }}" class="btn btn-danger">Déconnexion</a>
    </div>
@endsection