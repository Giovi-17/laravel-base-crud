@extends('layouts.app')

@section('title')
Show Comic
@endsection

@section('main_content')

    <div class="card" style="width: 36rem;">

        <img src="{{ $comics->thumb }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $comics->title }}</h5>
            <p class="card-text">{{ $comics->description }}</p>
            <div>Prezzo: {{ $comics->price }}</div>
            <div>Serie: {{ $comics->series }}</div>
            <div>Data Vendita: {{ $comics->sale_date }}</div>
            <div>Tipo: {{ $comics->type }}</div>
            <div><a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $comics->id]) }}">Modifica</a></div>
        </div>
      </div>

      <form action="{{ route('comics.destroy', ['comic' => $comics->id]) }}" method="post">
        @csrf
        @method('DELETE')

        <button class="btn btn-danger" onclick="return confirm('Sei sicuro di voler cancellare?')">Cancella</button>
    </form>

@endsection