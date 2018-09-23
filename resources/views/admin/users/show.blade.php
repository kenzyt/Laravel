@extends('admin/default')
@section('content')
    <div class="container">
        <div><img src="http://pcdoctorti.com.br/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" class="img-responsive img-thumbnail center-block"></div>
        <h1 class="text-success text-center">{{ $user->prenom }} {{ $user->nom }}</h1>
        <div class="center-block">
            <div class="center-block" id="add_comment">
                <p class="text-center">Ajouter un commentaire</p>
                <form method="post" action="{{ route("commentaire.store") }}">
                    <textarea rows="10" style="resize: none; border-radius: 10px 10px 10px 10px" class="form-control"></textarea>
                    <input type="text" value="{{ $user }}" class="hidden"/>
                    <input type="submit" value="Envoyer" class="center-block btn btn-danger" style="resize: none"/>
                </form>
            </div>
        </div>
    </div>
    </br>
    <div class="container">
        <hr style=" border: 0; height: 1px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(255, 255, 255, 0.75), rgba(0, 0, 0, 0));">
        <div class="center-block" id="comment_list">
            <div id="comment">
                <p class="text-center">Liste des commentaires</p>
                <p>{{ $user->prenom }} {{ $user->nom }} 10-02-2017 15:35</p>
                <p class="col-sm-offset-1" style="font-style: italic">Blablabla</p>
            </div>
        </div>
    </div>
@endsection