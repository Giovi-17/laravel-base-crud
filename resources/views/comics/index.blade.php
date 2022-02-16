@extends('layouts.app')

@section('title')
    Comics
@endsection

@section('main_content')
    
    <h1>Comic</h1>

    @foreach ($comics as $comic)
        
        <div>

            <h2>{{ $comic->title }}</h2>
            
            <div>{{ $comic->type }}</div>

        </div>

    @endforeach

@endsection