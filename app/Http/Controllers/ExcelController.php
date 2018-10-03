<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Excel;
class ExcelController extends Controller
{

    public function __construct(){


        $this->middleware('role:admin')->only(['index']);


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $excels = Excel::all();

        return view('uploadExcels.index', compact('excels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uploadExcels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $excel = (new Excel)->fill($request->all());
        $request->file('excel')->store('public');

        $excel->save();

        return redirect()->route('excels.edit', $excel->id)
           ->with('info', 'Datos guardados con éxito!');
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
        $excel = Excel::find($id);


        return view('uploadExcels.edit', compact('excel'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $excel = Excel::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente!');
    }
}
