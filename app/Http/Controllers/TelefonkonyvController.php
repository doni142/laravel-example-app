<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTelefonkonyvRequest;
use App\Http\Requests\UpdateTelefonkonyvRequest;
use App\Models\Telefonkonyv;
use Illuminate\Http\Request;

class TelefonkonyvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $order = $request->input('order');
        if (!in_array($order, ['name', 'id', 'number'])) {
            $order = 'name';
        }
        return view('telefonkonyv_main', ['barmi'=>Telefonkonyv::orderBy($order)->paginate(2)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // hf todo lapozhato. Telefonkönyvet folytatni.    ????? _main-ünk van
        return view('telefonkonyv_main');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTelefonkonyvRequest $request)
    {
        $telefonkonyv = new Telefonkonyv();
        $telefonkonyv->name = $request->name;
        $telefonkonyv->number = $request->number;
        $telefonkonyv->save();
        return view('telefonkonyv_main', ['message'=>"{$request->name} bejegyzés létrejött"]);
        // 'Kovács János bejegyzés létrejött' => $request->name [] bejegyzés létrejött'
    }

    /**
     * Display the specified resource.
     */
    public function show(Telefonkonyv $telefonkonyv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Telefonkonyv $telefonkonyv)
    {
        return view('telefonkonyv_main', ['telefonkonyv'=>$telefonkonyv]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTelefonkonyvRequest $request, Telefonkonyv $telefonkonyv)
    {
        $telefonkonyv->name = $request->name;
        $telefonkonyv->number = $request->number;
        $telefonkonyv->save();
        return redirect('telefonkonyv');
    }

    /**
     * Remove the specified resource from storage. hf Csináljunk egy bevásárló listát termék név, darabszám.
     */
    public function destroy(Telefonkonyv $telefonkonyv)
    {
        //
    }
}
