@section('sidebar')
    @parent
@stop

<li><a href="{{ url('/') }}">Accueil</a></li>
@if(Auth::guest())
<li><a href="{{ url('/auth/login') }}">Connexion</a></li>
@endif

@if(!Auth::guest())
<li><a href="{{ url('/') }}">Dashboard</a></li>
<li><a href="{{ url('/auth/logout') }}">Déconnexion</a></li>
@endif