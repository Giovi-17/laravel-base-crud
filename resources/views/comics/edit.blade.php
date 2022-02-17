@extends('layouts.app')

@section('title')
    Edit
@endsection

@section('main_content')
    <section>
        <div class="container">
            <h2>Modifica fumetto</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('comics.update', ['comic' => $comics->id]) }}" method="post">
                
                @csrf
                @method('PUT')

                <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ? old('title') : $comics->title }}">
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') ? old('thumb') : $comics->thumb }}">
                    <img src="{{ $comics->thumb }}" alt="">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') ? old('price') : $comics->price }}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ old('series') ? old('series') : $comics->series }}">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale_data</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') ? old('sale_date') : $comics->sale_date }}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{ old('type') ? old('type') : $comics->type }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description') ? old('description') : $comics->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection