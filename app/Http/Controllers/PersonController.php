<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index() {

        $personas = [
            'Favio',
            'Ariel',
            'Juan',
            'Roberto',
            'Marcelo'
        ];

        $titulo = 'Listado de Personas';

        //dd(compact('personas', 'titulo'));
        return view('persons', compact('personas', 'titulo')); // compact convierte a array asociativo

        /* return view('persons', [
            'personas' => $personas,
            'titulo' => 'Listado de Personas'
        ]); */
    }

    public function show($id) {
        return "Mostrando el detalle de la persona $id";
    }

    public function create() {
        return "Vista de creacion de personas";
    }
}
