<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Gasto;
class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gasto = DB::table('gasto')
        ->join('tipo_gasto', 'tipo_gasto.idtipo_gasto' , '=' , 'gasto.idtipo_gasto')
        ->select('gasto.idgasto', 'gasto.monto','gasto.fecha_gasto', 'tipo_gasto.idtipo_gasto', 'tipo_gasto.nombre')
        ->get();

        $tipogasto = DB::table('tipo_gasto')->get();
    return view('gasto.index' , compact('gasto','tipogasto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Gasto::create($request->all());


        return redirect()->route('gasto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $gasto = Gasto::findOrFail($request->gasto_id);
        $gasto ->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         DB::table('gasto')->where('idgasto', $id)->delete();
         return redirect()->route('gasto.index');
    }
}
