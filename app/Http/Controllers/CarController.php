<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;
use App\Models\Review;

class CarController extends Controller
{
    public function index() {

        $cars = Car::all();
        $review = Review::all();

        return view('home', ['cars' => $cars, 'reviews' => $review]);
    }

    public function index1() {

        $cars = Car::all();
        return view('welcome', ['cars' => $cars]);
    }

    public function register() {

        return view('registers.register');
    }

    public function yourCars() {

        $cars = Car::all();
        return view('cars.yourCars', ['cars' => $cars]);
    }

    public function store(Request $request) {
        $car = new Car;

        $car->modelo = $request->modelo;
        $car->marca = $request->marca;
        $car->versao = $request->versao;
        $car->anoFabricacao = $request->ano;
        $car->cor = $request->cor;

        $user =auth()->user();

        $car->idDono = $user->id;

        $car->save();

        return redirect('/cars/yourCars')->with('msg', 'Carro adicionado com sucesso!');
    }

    public function storeReview(Request $request) {
        $review = new Review;

        $review->modeloRevisao = $request->modeloRevisao;
        $review->idDono = $request->idDonoRevisao;
        $review->idCarro = $request->idCarroRevisao;
        $review->data =$request->data;

        $review->save();

        return redirect('/home')->with('msg', 'Revisão adicionada com sucesso!');
    }

    public function show($id) {
        $car = Car::findOrFail($id);

        return view('cars.show', ['car' => $car]);
    }

    public function destroy($id) {
        Car::findOrFail($id)->delete();
        
        return redirect('/cars/yourCars')->with('msg', 'Carro apagado com sucesso!');
    }

    public function destroyReview($id) {
        Review::findOrFail($id)->delete();
        
        return redirect('/home')->with('msg', 'Revisão cancelada com sucesso!');
    }

    public function edit($id) {
        $car = Car::findOrFail($id);

        return view('cars.edit', ['car' => $car]);
    }

    public function update(Request $request) {

        Car::findOrFail($request->id)->update($request->all());

        return redirect('/cars/yourCars')->with('msg', 'Carro editado com sucesso!');
    }
}
