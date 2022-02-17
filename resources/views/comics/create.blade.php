@extends('layouts.app')

@section('title')
    Creation
@endsection

@section('main_content')
    <div class="container">

        <h2>Crea un nuovo fumetto</h2>

        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif

        <form action="{{ route('comics.store') }}" method="post">

            @csrf
            @method('POST')
            
            <div>

                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">

            </div>

            <div>

                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb">

            </div>

            <div>

                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price">

            </div>

            <div>

                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series">

            </div>

            <div>

                <label for="sale_data" class="form-label">Sale_data</label>
                <input type="text" class="form-control" id="sale_data" name="sale_date">

            </div>

            <div>

                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type">

            </div>

            <div class="form-group">
                
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            
            </div>

            <div>

                <button type="submit" class="btn btn-primary mb-2">Submit</button>

            </div>
    
        </form>

    </div>
@endsection