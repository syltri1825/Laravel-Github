<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeveloppementWeb;


class DeveloppementWebController extends Controller
{

    public function listDevWebMe()
    {
        return DeveloppementWeb::all();
    }

    
    public function addDeveloppeurWeb(Request $request)
    {
        $developpeur = new DeveloppementWeb;

        $developpeur->name = $request->input('name');
        $developpeur->firstName = $request->input('firstName');
        $developpeur->email = $request->input('email');
        $developpeur->mobile = $request->input('mobile');
        $developpeur->old = $request->input('old');
        $developpeur->filiere = $request->input('filiere');
        $developpeur->image = $request->file('file')->store('Direction Pedagogique/Developpeurs web Octobre 2021 - 2022');
        $developpeur->save();
        return $developpeur;
    }

    public function deleteDev($id)
    {
        $delete = DeveloppementWeb::where('id',$id)->delete();

        if($delete)
        {
            return ['result' => 'Operation réussie. Votre produit a bien été supprimé'];
        }
        else
        {
            return ['result' => 'Operation Echouer. Votre produit a bien été supprimé'];
        }
    }
}
