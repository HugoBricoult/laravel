@extends('layout.app')
@section('title','Becode')
    
@section('content')
    @foreach ($restaurant as $resto)
    <div>
        <h2>{{$resto->name}}</h2>
    </div>
    @endforeach
@endsection