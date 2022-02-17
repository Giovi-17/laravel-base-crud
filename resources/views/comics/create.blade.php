@extends('layouts.app')

@section('title')
    Creation
@endsection

@section('main_content')
    <div class="container">

        <h2>Crea un nuovo fumetto</h2>

        <form action="{{ route('comics.store') }}" method="post">

            @csrf
            @method('POST')
            
            <div>

                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">

            </div>

            <div>

                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="title">

            </div>

            <div>

                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="title">

            </div>

            <div>

                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="title">

            </div>

            <div>

                <label for="sale_data" class="form-label">Sale_data</label>
                <input type="text" class="form-control" id="sale_data" name="title">

            </div>

            <div>

                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="title">

            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
    
        </form>

    </div>
@endsection