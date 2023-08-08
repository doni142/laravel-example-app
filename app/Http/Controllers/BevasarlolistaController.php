<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBevasarlolistaRequest;
use App\Http\Requests\UpdateBevasarlolistaRequest;
use App\Models\Bevasarlolista;
use Illuminate\Http\Request;

class BevasarlolistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $order = $request->input('order');
        if (!in_array($order, ['termeknev', 'darabszama', 'id'])) {
            $order = 'termeknev';
        }
        return view('bevasarlolista_main');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bevasarlolista_main');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBevasarlolistaRequest $request)
    {
        $bevasarlolista = new Bevasarlolista();
        $bevasarlolista->termekneve = $request->termekneve;
        $bevasarlolista->darabszama = $request->darabszama;
        $bevasarlolista->save();
        return view('bevasarlolista_main');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bevasarlolista $bevasarlolista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bevasarlolista $bevasarlolista)
    {
        return view('$bevasarlolista_main', ['$bevasarlolista' => $bevasarlolista]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBevasarlolistaRequest $request, Bevasarlolista $bevasarlolista)
    {
        $bevasarlolista->termekneve = $request->termekneve;
        $bevasarlolista->darabszama = $request->darabszama;
        $bevasarlolista->save();
        return redirect('bevasarlolista');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bevasarlolista $bevasarlolista)
    {
        //
    }
}
