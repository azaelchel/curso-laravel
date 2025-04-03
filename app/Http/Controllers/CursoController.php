<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function getNames(){
        return view('welcome', ['name' => 'Azael']);
    }

    public function suma($a, $b)
    {
        $resultado = $a + $b;
        return "La suma de $a + $b es: $resultado";
    }

    public function resta($a, $b)
    {
        $resultado = $a - $b;
        return "La resta de $a - $b es: $resultado";
    }

    public function multiplicacion($a, $b)
    {
        $resultado = $a * $b;
        return "La multiplicación de $a * $b es: $resultado";
    }

    public function division($a, $b)
    {
        if ($b == 0) {
            return "No se puede dividir entre cero.";
        }

        $resultado = $a / $b;
        return "La división de $a / $b es: $resultado";
    }

    public function index()
    {
        $name = 'Azael';
        return view('layout.child', compact('name'));
    }

}
