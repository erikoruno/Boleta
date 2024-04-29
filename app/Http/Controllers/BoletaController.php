<?php

namespace App\Http\Controllers;

use App\Models\Boleta;
use App\Models\User;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use PDF;

class BoletaController extends Controller
{

    public function __construct(){
         $this->middleware('auth'); 
    }
    

    public function create(){
        $users = User::all();
        return view('boleta.create', compact('users'));
    }

    public function sendData(Request $request){
        $boleta= new Boleta();
        $boleta->description = $request->input('description');
        $boleta->mes = $request->input('mes');
        $boleta->año = $request->input('año');
        $boleta->descuentos = $request->input('descuentos');
        $boleta->subtotal = $request->input('subtotal');
        $boleta->total = $request->input('total');
        $boleta->user_id = $request->input('user_id');
        
        $boleta->save();

        return redirect('/home')->with('success','Boleta creada correctamente');
    }

    public function mostrarBoletas(Request $request) {

        $user = Auth::user();
        $year = $request->input('year'); // Captura el año
        $month = $request->input('month'); // Captura el mes
    
        if (!$year || !$month) {
            return redirect()->back()->with('error', 'Debe seleccionar un año y un mes.');
        }
    
        // Filtrar boletas por año y mes
        $boletas = Boleta::where('user_id', $user->id)
                          ->where('año', $year) // Filtrar por año
                         ->where('month', $month) // Filtrar por mes
                         ->get();

        if ($boletas->isEmpty()) {
         // Devolver la vista con el mensaje "No se encontraron boletas..."
            return view('boleta.pdf', [
             'boletas' => collect(), // Pasar una colección vacía
             'month' => $month,
             'year' => $year,
               ]);
         }
    
        return view('boleta.pdf', [
            'boletas' => $boletas,
            'month' => $month,
            'year' => $year,
        ]);
    }

    public function pdf(Request $request){

        $user = Auth::user();
        $year = $request->input('year');
        $month = $request->input('month');
        // $boletas = Boleta::where('user_id', $user->id)->get();

        //$firstBoletaId = $boletas->isNotEmpty() ? $boletas->first()->id : null;
        
        if (!$year || !$month) {
            return redirect()->back()->with('error', 'Debe seleccionar un año y un mes.');
        }

        $boletas = Boleta::where('user_id', $user->id) 
                     ->where('año', $year)
                     ->where('mes', $month)
                     ->get();

         if ($boletas->isEmpty()) {
            return view('boleta.pdf', [
                'boletas' => collect(), // Pasar una colección vacía para disparar el @else
                'year' => $year,
                'month' => $month,
            ]);
         }

        $pdf = PDF::loadView('boleta.pdf',[
            'boletas' => $boletas,
            'year' => $year,
            'month' => $month,
        ]);

        //$pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream('boleta.pdf');
        //return view('boleta.pdf', compact('boletas','firstBoletaId'));
    }

    
}
