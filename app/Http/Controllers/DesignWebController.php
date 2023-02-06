<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesignWeb;


class DesignWebController extends Controller
{
    public function listDesWebMe()
    {
        return DesignWeb::all();
    }

    
    public function addDesignerWeb(Request $request)
    {
        $designerweb = new DesignWeb;

        $designerweb->name = $request->input('name');
        $designerweb->firstName = $request->input('firstName');
        $designerweb->email = $request->input('email');
        $designerweb->mobile = $request->input('mobile');
        $designerweb->old = $request->input('old');
        $designerweb->filiere = $request->input('filiere');
        $designerweb->image = $request->file('file')->store('Direction Pedagogique/Designer Web Octobre 2021 - 2022');
        $designerweb->save();
        return $designerweb;
    }

    public function deleteDw($id)
    {
        $delete = DesignWeb::where('id',$id)->delete();

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
