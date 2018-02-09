<?php

namespace App\Http\Controllers;

use App\Divisiones;
use Illuminate\Http\Request;

class divisionController extends Controller
{
    //
        public function division(){
            $this->validate(request(), [
                'dividendo'=>"required|integer",
                'divisor' => "required|integer",
            ]);

            $dividendo=request()->get('dividendo');
            $divisor=request()->get('divisor');

            $resultado = $dividendo / $divisor;

            $division = new Divisiones();
            $division->dividendo = $dividendo;
            $division->divisor = $divisor;
            $division->resultado = $resultado;
            $division->save();

            return view('resultado', ['resultado'=>$resultado]);
        }

        public function __construct(){
            $this->middleware('dCero');
        }
}
