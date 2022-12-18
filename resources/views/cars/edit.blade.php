@extends('layouts.main')

@section('title', 'Editando')

@section('content')
       
    <div class="col-md-12" id="cars-container">
        <h1 class="title">Edite seu carro:</h1>
        <div id="cars-create-conteiner" class="col-md-6 offset-md-1">
            <form action="/cars/update/ {{ $car->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="modelo">Modelo:</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="{{ $car->modelo }}" value="{{ $car->modelo }}">
                </div>
                <div class="form-group">
                    <label for="marca">Marca:</label>
                    <input type="text" class="form-control" id="marca" name="marca" placeholder="{{ $car->marca }}" value="{{ $car->marca }}">
                </div>
                <div class="form-group">
                    <label for="versao">Versão:</label>
                    <input type="text" class="form-control" id="versao" name="versao" placeholder="{{ $car->versao }}" value="{{ $car->versao }}">
                </div>
                <div class="form-group">
                    <label for="ano">Fabricação:</label>
                    <input type="text" class="form-control" id="anoFabricacao" name="anoFabricacao" placeholder="{{ $car->anoFabricacao }}" value="{{ $car->anoFabricacao }}">
                </div>
                <div class="form-group">
                    <label for="cor">Cor:</label>
                    <input type="text" class="form-control" id="cor" name="cor" placeholder="{{ $car->cor }}" value="{{ $car->cor }}">
                </div>
                <input type="submit" class="btn btn-info" value="Editar">
            </form>
        </div>


    </div>


@endsection