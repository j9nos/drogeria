<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfume;
use Validator;

class PerfumeController extends Controller
{
    public function getPerfumes() {

        $perfumes = Perfume::all();

        return view("/perfumes", ["perfumes"=>$perfumes]);
    }

    public function newPerfume() {

        return view( "new_perfume" );
    }

    public function storePerfume( Request $request ) {
        $input = $request->all();
        $validator = Validator::make($input, [
            "name"=>"required",
            "type"=>"required",
            "price"=>"required|integer"
        ]);
        if($validator->fails())
        {
            return redirect("/perfumes")->with('alert', "Hibás mezők!");
        }
        Perfume::create($input);
        return redirect( "/perfumes" );
    }

    public function editPerfume( $id ) {

        $perfume = Perfume::find( $id );

        return view( "edit_perfume", [
            "perfume" => $perfume
        ]);
    }

    public function updatePerfume( Request $request, Perfume $perfume ) {

        $input = $request->all();
        $validator = Validator::make($input, [
            "name"=>"required",
            "type"=>"required",
            "price"=>"required|integer"
        ]);
        if($validator->fails())
        {
            return redirect("/perfumes")->with('alert', "Hibás mezők!");
        }
        $perfume->update([
            'name'=>$request->name,
            'type'=>$request->type,
            'price'=>$request->price,
        ]);
        return redirect( "/perfumes" );
    }

    public function deletePerfume( $id ) {

        $perfume = Perfume::find( $id );
        $perfume->delete();
        return redirect( "/perfumes" );
    }
}
