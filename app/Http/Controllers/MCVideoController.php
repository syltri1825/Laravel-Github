<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\MCVideo;


class MCVideoController extends Controller
{
    public function listMontMe()
    {
        return MCVideo::all();
    }

    
    public function addMonteurCadreurVideo(Request $request)
    {
        $Monteur = new MCVideo;

        $Monteur->name = $request->input('name');
        $Monteur->firstName = $request->input('firstName');
        $Monteur->email = $request->input('email');
        $Monteur->mobile = $request->input('mobile');
        $Monteur->old = $request->input('old');
        $Monteur->filiere = $request->input('filiere');
        $Monteur->image = $request->file('file')->store('Direction Pedagogique/Monteurs Cadreurs Video Octobre 2021 - 2022');
        $Monteur->save();
        return $Monteur;
    }

    public function deleteMv($id)
    {
        $delete = MCVideo::where('id',$id)->delete();

        if($delete)
        {
            return ['result' => 'Operation réussie. Votre produit a bien été supprimé'];
        }
        else
        {
            return ['result' => 'Operation Echouer.'];
        }
    }
}
