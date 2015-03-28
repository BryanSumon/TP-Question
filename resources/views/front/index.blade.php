@extends('layouts.master')

@section('content')
    @if(!empty($questions))
    <h2>Liste des questions :</h2>
    @foreach ($questions as $question)
        <h3><a href="{{url('single/'.$question->id)}}">{{$question->title}}</a></h3>
        <p><i>Difficulté : {{$question->class_level}}</i></p>
        <p><i>Tag : </i>
            @foreach($question->tag as $tag)
                <a href="{{url('tag/'.$tag->id)}}"> {{$tag->name}}, </a>
            @endforeach
        </p>
        
        <p><i>Publié le : {{$question->created_at->format('d/m/Y')}}</i></p> 
    @endforeach
        <?php echo $questions->render(); ?> 
    @else 
        <p>Il n'y a pas de questions disponibles.</p>
    @endif
@stop