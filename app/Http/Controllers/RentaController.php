<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renta;
use App\Models\Pelicula;
use Illuminate\Support\Facades\DB;
class RentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        //$rentas = Renta::where('email_user','like',"%$email%")->paginate(5);
        /* $rentas = Renta::email_user($email)->paginate(5);
        return view('rentas.index',compact('rentas')); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
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
        
        $this->validate($request,[ 'email_user'=>'required', 'nombre'=>'required','fecha_registro'=>'required', 'fecha_devolucion'=>'required', 'fecha_entrega'=>'required']);
        Renta::create($request->all());
        return redirect()->route('Peliculas.index');
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
        $rents=renta::find($id);
        return view('rentas.edit',compact('rents'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rentas = DB::table('rentas')->where('email_user', '=', "$id")->get();
        return view('rentas.index',compact('rentas'));
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
        $idd = $_POST['email_user'];
        $this->validate($request,[ 'email_user'=>'required', 'nombre'=>'required','fecha_registro'=>'required', 'fecha_devolucion'=>'required', 'fecha_entrega'=>'required']);
        renta::find($id)->update($request->all());
        $rentas = Renta::where('email_user','like',"%$idd%")->paginate();
        return view('rentas.index',compact('rentas'));
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
        DB::table('rentas')->where('id', '=', "$id")->delete();
        return redirect()->back();
    }
}
