<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Laborant;
use Illuminate\Http\Request;
use App\Http\Resources\LaborantResource;

class LaborantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboranti = Laborant::all();
        return LaborantResource::collection($laboranti);
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
     * @param  \App\Models\Laborant  $laborant
     * @return \Illuminate\Http\Response
     */
    public function show(Laborant $laborant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laborant  $laborant
     * @return \Illuminate\Http\Response
     */
    public function edit(Laborant $laborant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laborant  $laborant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laborant $laborant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laborant  $laborant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laborant = Laborant::find($id);
        if ($laborant) {
            $laborant->delete();
            return response()->json(['Laborant je uspesno obrisan!', new LaborantResource($laborant)]);
        } else {
            return response()->json('Laboranta sa unetim id-em nije moguće pronaći!'
);
        }
    }

}
