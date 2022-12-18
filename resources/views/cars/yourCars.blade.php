@extends('layouts.main')

@section('title', 'Seus carros')

@section('content')
    <div class="col-md-12" id="cars-container">
        <h1 class="title">Seus Carros:</h1>
        @foreach($cars as $car)
            @if($car->idDono  == auth()->user()->id ) 
                <div class="card col-md-6 divYourCars">
                    <p>Modelo: <b>{{ $car->modelo }}</b></p>
                    <p>Marca: <b>{{ $car->marca }}</b></p>
                    <p>Versão: <b>{{ $car->versao }}</b></p>
                    <p>Cor: <b>{{ $car->cor }}</b></p>
                    <p>Fabricação: <b>{{ $car->anoFabricacao }}</b></p>
                    <table>
                        <tr>
                            <td>
                                <a href="/cars/edit/{{ $car->id }}" class="btn btn-info">Editar</a>
                                <form action="/cars/{{ $car->id }}" method="POST" class="formDelete">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn">Apagar</button>
                                </form>
                                <a href="/cars/{{ $car->id }}" class="btn btn-success">Marcar uma revisão</a>
                            </td>
                        </tr>
                    </table>                
                </div>
            @endif  
        @endforeach
    </div>
@endsection