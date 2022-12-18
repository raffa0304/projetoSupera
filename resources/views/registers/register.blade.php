@extends('layouts.main')

@section('title', 'Registrar carro')

@section('content')
       
    <div class="col-md-12" id="cars-container">
        <h1 class="title">Registre um Carro:</h1>
        <div id="cars-create-conteiner" class="col-md-6 offset-md-1">
            <form action="/registers" method="POST">
                @csrf
                <div class="form-group">
                    <label for="modelo">Modelo:</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Digite o modelo do carro..">
                </div>
                <div class="form-group">
                    <label for="marca">Marca:</label>
                    <input type="text" class="form-control" id="marca" name="marca" placeholder="Digite a marca do carro..">
                </div>
                <div class="form-group">
                    <label for="versao">Versão:</label>
                    <input type="text" class="form-control" id="versao" name="versao" placeholder="Digite a versão do carro..">
                </div>
                <div class="form-group">
                    <label for="ano">Fabricação:</label>
                    <input type="text" class="form-control" id="ano" name="ano" placeholder="Digite o ano de fabricação do carro..">
                </div>
                <div class="form-group">
                    <label for="cor">Cor:</label>
                    <input type="text" class="form-control" id="cor" name="cor" placeholder="Digite a cor do carro..">
                </div>
                <input type="submit" class="btn btn-primary" value="Registrar">
            </form>
        </div>


    </div>


@endsection