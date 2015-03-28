@extends('layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')
    <h2><u>{{$tagName->name}}</u></h2>
    @if(!empty($questions))
        @foreach($questions as $question)
            <h3>{{$question->title}}</h3>
        @endforeach
    @else 
        <p>Aucune questions appartenants à ce mot clé.</p>
    @endif
@stop