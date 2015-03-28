@extends('layouts.master')

@section('sidebar')
    @parent
@stop

@section('content')
    <h2><u>{{$question->title}}</u></h2>
    <p>{{$question->content}}</p>
    <p><i>Difficulté : {{$question->class_level}}</i></p>
    <p><i>Publié le : {{$question->created_at->format('d/m/Y')}}</i></p>
    @if(!empty($tags))
            <i>Tags :</i>
            @foreach($tags as $tag)
                <a href="{{url('tag/'.$tag->id)}}"> {{$tag->name}},</a>
            @endforeach
    @else
        <p>Cette question n'a pas de Tag associé.</p>
    @endif
@stop