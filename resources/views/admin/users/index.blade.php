@extends('admin/default')
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
                    {!! BootForm::open()->action(route("admin.edit", $user))->style("display:inline") !!}
                    {!! BootForm::hidden("_method")->value("update") !!}
                    <input type="submit" class="btn btn-primary" value="Modifier" />
                    {!! BootForm::close() !!}
                    {!! BootForm::open()->action(route("admin.destroy", $user))->style("display:inline") !!}
                    {!! BootForm::hidden("_method")->value("delete") !!}
                    <input type="submit" value="Supprimer" class="btn btn-danger"/>
                    {!! BootForm::close() !!}
                    <a href="{{ route("admin.show", $user) }}" class="btn btn-success" >Voir le profil</a>
                </div>
            @endforeach
        </div>
        <br>
    </div>
@endsection