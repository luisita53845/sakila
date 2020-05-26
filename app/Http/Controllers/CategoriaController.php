<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    public function index(){

        $categorias = Categoria::paginate(5);
        return view ('categorias.index')->with("nombre", $categorias);
    }

    public function create(){
        return view("categorias.new");
    }

    public function store(){

        $reglas = [
            "nombre" => ["required", "alpha", "min:4", "unique:category,name"]
        ];

        $mensajes = [
            "required" => "Campo Obligatorio",
            "alpha" => "Solo Letras",
            "min" => "Solo categorias de :min caracteres",
            "unique" => "Categoria Repetida"
        ];

        $validador = Validator::make($_POST, $reglas, $mensajes );

        if($validador->fails()){
            return redirect ("categorias/create")->withErrors($validador)->withInput(); 
        }else{

            $categoria = new Categoria;
            $categoria->name=$_POST["nombre"];
            $categoria->save();
            return redirect ('categorias/create')->with("Exito", "Categoria Registrada");

        }
    }   

    public function edit ($idcategoria){
        $nombre = Categoria::find($idcategoria);
        var_dump($nombre);
        return view('categorias.edit')->with("nombre" , $nombre);
    }

    public function update(){
        $nombre = Categoria::find($_POST["id"]);

        $nombre->name = $_POST["nombre"];

        $nombre->save();
        echo "cambios guardar";
    }
}
