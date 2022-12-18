@extends('layouts.main')

@section('title', 'Revisão')

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <h1>Agende uma revisão para o seu carro:</h1>
            <div class="col-md-6 divRevisao">
                <h1>Veiculo: <b>{{$car->marca}} {{$car->modelo}}</b></h1>
                <form action="/cars" method="POST">
                @csrf
                <div class="form-group">
                    <input type="hidden" class="form-control" id="modeloRevisao" name="modeloRevisao" value="{{$car->modelo}}">
                    <input type="hidden" class="form-control" id="idDonoRevisao" name="idDonoRevisao" value="{{$car->idDono}}">
                    <input type="hidden" class="form-control" id="idcarroRevisao" name="idCarroRevisao" value="{{$car->id}}">
                </div>
                <div class="form-group">
                    <label for="data">Para qual data deseja agendar sua revisão:</label>
                    <input type="date" class="form-control" id="data" name="data">
                </div>
                <input type="submit" class="btn btn-primary" value="Agendar">
            </form>
            </div>
        </div>
    </div>

@endsection