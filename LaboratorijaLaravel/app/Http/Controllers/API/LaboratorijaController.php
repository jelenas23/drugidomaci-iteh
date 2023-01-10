<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Laboratorija;
use Illuminate\Http\Request;
use App\Http\Resources\LaboratorijaResource;
use Illuminate\Support\Facades\Validator;

class LaboratorijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labs = Laboratorija::all();
        return LaboratorijaResource::collection($labs); 

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
     * @param  \App\Models\Laboratorija  $laboratorija
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laboratorija = Laboratorija::find($id);
        return new LaboratorijaResource($laboratorija);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laboratorija  $laboratorija
     * @return \Illuminate\Http\Response
     */
    public function edit(Laboratorija $laboratorija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laboratorija  $laboratorija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'adresa' => 'required|string',
            'email' => 'required|email',
            'website' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $laboratorija = Laboratorija::find($id);

        if ($laboratorija) {
            $laboratorija->naziv = $request->naziv;
            $laboratorija->adresa = $request->adresa;
            $laboratorija->email = $request->email;
            $laboratorija->website = $request->website;

            $laboratorija->save();

            return response()->json(['Laboratorija je uspesno izmenjena!', new LaboratorijaResource($laboratorija)]);
        } else {
            return response()->json('Laboratoriju sa unetim id-em nije moguće pronaći!');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laboratorija  $laboratorija
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laboratorija = Laboratorija::find($id);
        if ($laboratorija) {
            $laboratorija->delete();
            return response()->json(['Laboratorija je uspesno obrisana!', new LaboratorijaResource($laboratorija)]);
        } else {
            return response()->json('Laboratoriju sa unetim id-em nije moguće pronaći!');
        }
    }

}
