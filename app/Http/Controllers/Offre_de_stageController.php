<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Entreprise;
use App\Models\Offre_de_stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Offre_de_stageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $offre_de_stage = new Offre_de_stage;
        $offre_de_stage->intitule=$request->intitule;
        $offre_de_stage->duree_du_stage=$request->duree_du_stage;
        $offre_de_stage->base_de_remuneration=$request->base_de_remuneration;
        $offre_de_stage->date_du_stage=$request->date_du_stage;
        $offre_de_stage->nombre_de_places=$request->nombre_de_places;
        $offre_de_stage->id_entreprise = DB::table('entreprise')->where('nom_entreprise', $request->nom_entreprise)->value("id");
        
        switch ($request->input('action')) {

            case 'add':

                $request->validate([
                    'intitule' => 'required',
                    'nom_entreprise' => 'required',
                    'duree_du_stage' => 'required',
                    'base_de_remuneration' => 'required',
                    'date_du_stage' => 'required',
                    'nombre_de_places'=> 'required',
                ]);

                $query=$offre_de_stage->save();

                echo 'Offre de stage ajoutée';
                echo "<script> history.go(-1); </script>";
                break;
            
            case 'search':

                $stage = Offre_de_stage::where('intitule', $offre_de_stage->intitule)
                ->orWhere('duree_du_stage', $offre_de_stage->duree_du_stage)
                ->orWhere('base_de_remuneration', $offre_de_stage->base_de_remuneration)
                ->orWhere('date_du_stage', $offre_de_stage->date_du_stage)
                ->orWhere('nombre_de_places', $offre_de_stage->nombre_de_places)
                ->orWhere('id_entreprise', $offre_de_stage->id_entreprise)->get();
                break;
    
            case 'update':
                dd("ca marche pour l'update");
                break;

            case 'delete':
                dd("ca marche pour le delete");
                break;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}

?>