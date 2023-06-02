<?php

namespace App\Http\Controllers;

use App\Models\evento;
use App\Models\inscripcion;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ClienteController extends Controller
{
    public function index()
    {
        try {

            $eventos = evento::latest()->first();
            return view('pages.inscripcion', [
                'eventos'=> $eventos
            ]);

        } catch (\Exception $e) {
            dd($e);
        }
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre'=>'required|min:3',
            'apellidos'=>'required|min:5',
            'documento'=>'required|min:5|numeric',
            'email'=>'required|email|max:60',
            'telefono'=>'required|numeric|min:6'
        ]);

        if ($request->nombre && $request->apellidos && $request->documento && $request->email && $request->telefono && $request->inputEvent ) {

            $incripcion = new inscripcion();
            $incripcion->nombre= $request-> nombre;
            $incripcion->apellidos= $request-> apellidos;
            $incripcion->documento= $request->documento;
            $incripcion->email= $request->email;
            $incripcion->telefono= $request->telefono;
            $incripcion->id_eventos= $request->inputEvent;
            $incripcion->save(); 

        } else {
            $request->session()->put('mensaje', 'Campos incompletos');
        }
        
        return redirect()->back()->with('success', 'Inscripción Exitosa, Espera que el Asesor apruebe el pago.');
        
        /* try {
            
            $this->validate($request,[
                'inputName'=>'required|min:3',
                'apellidos'=>'required|min:5',
                'documento'=>'required|min:5|numeric',
                'email'=>'required|email|max:60',
                'telefono'=>'required|numeric|min:6'
            ]);

            if ($request->inputName && $request->apellidos && $request->documento && $request->email && $request->telefono && $request->inputEvent ) {

                $incripcion = new inscripcion();
                $incripcion->nombre= $request-> inputName;
                $incripcion->apellidos= $request-> apellidos;
                $incripcion->documento= $request->documento;
                $incripcion->email= $request->email;
                $incripcion->telefono= $request->telefono;
                $incripcion->id_eventos= $request->inputEvent;
                $incripcion->save(); 

            } else {
                $request->session()->put('mensaje', 'Campos incompletos');
            }
            

            
            

            return back();
            return view('dashboard')->with('mensaje', 'Inscripción Realizada Correctamente');
            /* return view('pages.inscripcion', [
                'eventos'=> $eventos
            ]); 

        } catch (\Exception $e) {
            /* dd($e); 
        } */
    }


    public function show()
    {
        try {
            
            $inscripciones = inscripcion::all();
            return view('pages.inscripciones_ver', [
                'inscripciones'=> $inscripciones
            ]);

        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function ver($id)
    {
        try {
            
            $cliente = inscripcion::where('id',$id)->first();

            

            return view('pages.clientesVer', [
                'cliente'=> $cliente
            ]);

        } catch (\Exception $e) {
            dd($e);
        }
    }
}
