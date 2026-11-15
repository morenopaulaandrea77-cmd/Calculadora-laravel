<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index()
    {
        return view('calculadora');
    }

    public function calcular(Request $request)
    {
        $datos = $request->validate([
            'valor1' => ['required', 'numeric'],
            'valor2' => ['required', 'numeric'],
            'operacion' => ['required', 'in:sumar,restar,multiplicar,dividir'],
        ]);

        $a = (float) $datos['valor1'];
        $b = (float) $datos['valor2'];
        $operacion = $datos['operacion'];

        if ($operacion === 'dividir' && $b == 0.0) {
            return redirect()->back()
                ->withErrors(['valor2' => 'No se puede dividir entre cero.'])
                ->withInput();
        }

        $resultado = match ($operacion) {
            'sumar' => $a + $b,
            'restar' => $a - $b,
            'multiplicar' => $a * $b,
            'dividir' => $a / $b,
        };

        return view('calculadora', compact('resultado'));
    }
}