<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExcelStoreRequest;
use App\Http\Requests\ExcelUpdateRequest;
use App\Excel;
use Illuminate\Support\Facades\Storage;

class ExcelController extends Controller
{

    public function __construct(){


        $this->middleware('role:admin');


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $title       = $request->get('titulo');
        $description = $request->get('descripcion');

        $excels = Excel::orderBy('id','DESC')
            ->Title($title)
            ->Description($description)
            ->paginate(3);

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
    public function store(ExcelStoreRequest $request)
    {

        //$excel = (new Excel)->fill($request->all());
        //$request->file('excel')->store('public');
        $excel = Excel::create($request->all());

        if($request->file('file')){

            $path = Storage::disk('public')->put('archivos', $request->file('file'));

            $excel->fill(['file' => asset($path)])->save();
        }
        

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
    public function update(ExcelUpdateRequest $request, $id)
    {

        $excel = Excel::find($id);

        $excel->fill($request->all())->save();

        if($request->file('file')){

            $path = Storage::disk('public')->put('archivos', $request->file('file'));

            $excel->fill(['file' => asset($path)])->save();
        }
       
       return redirect()->route('excels.edit', $excel->id)
           ->with('info', 'Datos Actualizados con éxito!');
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
