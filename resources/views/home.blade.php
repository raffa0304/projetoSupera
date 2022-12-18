
@extends('layouts.main')

@section('title', 'Home')

@section('content')
       <div class="col-md-12" id="cars-container">
        <h1 class="title">Suas Revisão: </h1>
        @foreach($reviews as $review)
            @if($review->idDono  == auth()->user()->id ) 
                <div class="card col-md-3 divYourCars">
                    <p>Modelo: <b>{{ $review->modeloRevisao }}</b></p>
                    <p>Data da Revisão: <b>{{ $review->data }}</b></p>
                    <form action="/home/{{ $review->id }}" method="POST">
                         @csrf 
                         @method('DELETE')
                         <button type="submit" class="btn btn-danger delete-btn col-md-6">Cancelar</button>
                    </form>        
                </div>
            @endif  
        @endforeach


@endsection


