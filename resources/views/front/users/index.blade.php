@extends('front/default')
@section('content')
    <div class="container">
        <h1 >Liste des utilisateurs</h1>
        <hr>
        <div class="row text-center" style="border-radius: 5px 5px 5px 5px; background-color: #3a3a3a">
            @foreach($users as $user)
                <div style="float: left; width: 20%; padding: .75rem; margin-bottom: 2rem; border: 5px;">
                <!-- <div><img src={{ $user->image }}></div> -->
                    <div><img src="http://pcdoctorti.com.br/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png" class="img-responsive img-thumbnail"></div>
                    <div>{{ $user->prenom }} {{ $user->nom }}</div>
                    <a href="{{ route("users.show", $user) }}" class="btn btn-success" >Voir le profil</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection