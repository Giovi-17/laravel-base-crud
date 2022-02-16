@extends('layouts.app')

@section('title')
    Comics
@endsection

@section('main_content')
    
    <h1>Comic</h1>

    @foreach ($comics as $comic)
        
        <div>

            <h2>

                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">{{ $comic->title }}</a>

            </h2>
            
            <div>{{ $comic->type }}</div>

        </div>

    @endforeach

@endsection