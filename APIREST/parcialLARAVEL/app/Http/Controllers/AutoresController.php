<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AutoresController extends Controller
{
    //
    public function listar(){
        $url = 'http://192.168.50.4:5000/books';
        $response = Http::get($url);
        $data = $response->json();
        return view('listar', compact('data'));
    }


    public function agregar(Request $request){

        return view('agregar');
    }

    public function store(Request $request){
        $url = 'http://192.168.50.4:5000/books';
        $response = Http::post($url,[
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
        ]);
        return redirect()->route('libro.listar');
    }

    public function libro($id){
        $url = 'http://192.168.50.4:5000/books/'.$id;
        $response = Http::get($url);
        $data = $response->json();
        return view('libro', compact('data'));
    }

    public function delete($id){
        $url = 'http://192.168.50.4:5000/books/'.$id;
        $response = Http::delete($url);
        return redirect()->route('libro.listar');
    }

    public function view($id){
        $url = 'http://192.168.50.4:5000/books/'.$id;
        $response = Http::get($url);
        $data = $response->json();
        return view('libroView', compact('data'));
    }

    public function update(Request $request){
        $url = 'http://192.168.50.4:5000/books/'.$request->id;
        $response = Http::put($url,[
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
        ]);
        $data = $response->json();
        
        return redirect()->route('libro.listar');
    }

}
