<!-- Stored in resources/views/layouts/master.blade.php -->
 
<html>
    <head>
        <title>Questions lists</title>
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="container header">
            <div class="row header">
                <div class="col-xs-4">
                    <h1><a href="{{ url('/') }}">Questions List</a></h1>
                </div>
                <div class="col-xs-4 col-xs-offset-4">
                    <blockquote>
                        TP réalisé par Bryan Sumon
                    </blockquote>
                </div>
            </div>
        </div><!-- header-->
        <div class="container navigation">
            <div class="row navigation">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-collapse">
                        <ul class="breadcrumb">
                            @include('includes.nav')
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div><!-- navigation -->
        <div class="container content">
            <div class="row content">
                <div class="col-xs-8">
                    @yield('content')
                </div>
                <div class="col-xs-4">
                    @if(!empty($tags))
                    <h3>Listes des mots clés :</h3>
                    @foreach ($tags as $tag)
                        <ul>
                            <li><a href="{{url('tag/'.$tag->id)}}">{{$tag->name}}</a></li>
                        </ul>
                    @endforeach
                    @else 
                        <p>Il n'y a pas de mots-clés disponibles.</p>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>