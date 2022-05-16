<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PetsModel;


class PetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pets = PetsModel::all();
        foreach($pets as $p){
            echo $p-> idPets . " ";
            echo $p->pets . " "; 
            echo $p->sexo . " "; 
            echo $p->Obs . "<br />"; 
        }

    }



    public function exibirPets()
    {
        $pets = PetsModel::all();
        return view('petsView', compact('pets'));
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
        $pets = PetsModel::where('idPets', $id)->delete();
        return redirect()->action('App\Http\Controllers\PetsController@exibirPets');
    }




}
