<nav class="navbar navbar-inverse">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="{{ route("users.index") }}">Voir les utilisateurs</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route("deconnexion") }}">Déconnexion <span class="glyphicon glyphicon-off"></span></a></li>
        </ul>
    </div>
</nav>