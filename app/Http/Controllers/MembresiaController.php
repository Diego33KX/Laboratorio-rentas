<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membresia;
use App\Models\Pelicula;
class MembresiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('membresias.create');
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
        //
        $idd = $_POST['id_user'];
        $this->validate($request,[ 'id_user'=>'required', 'fecha_expedicion'=>'required','fecha_expiracion'=>'required']);
        Membresia::create($request->all());
        return redirect()->route('Membresias.show', $idd);
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
        $membresias = Membresia::where('id_user','like',"%$id%")->paginate();
        return view('membresias.index',compact('membresias'));
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
        $membresias=Membresia::find($id);
        return view('membresias.edit',compact('membresias'));
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
        $idd = $_POST['id_user'];
        $this->validate($request,[ 'id_user'=>'required', 'fecha_expedicion'=>'required','fecha_expiracion'=>'required']);
        membresia::find($id)->update($request->all());
        $membresias = Membresia::where('id_user','like',"%$idd%")->paginate();
        return view('membresias.index',compact('membresias'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $idd = $_POST['id_user'];
        membresia::find($id)->delete();
        $membresias = Membresia::where('id_user','like',"%$idd%")->paginate();
        return view('membresias.index',compact('membresias'));
    }
}
