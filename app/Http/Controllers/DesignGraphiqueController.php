<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DesignGraphique;



class DesignGraphiqueController extends Controller
{
    public function listDesGMe()
    {
        return DesignGraphique::all();
    }

    
    public function addDesignerGraphique(Request $request)
    {
        $designergraphique = new DesignGraphique;

        $designergraphique->name = $request->input('name');
        $designergraphique->firstName = $request->input('firstName');
        $designergraphique->email = $request->input('email');
        $designergraphique->mobile = $request->input('mobile');
        $designergraphique->old = $request->input('old');
        $designergraphique->filiere = $request->input('filiere');
        $designergraphique->image = $request->file('file')->store('Direction Pedagogique/Designers Graphique Octobre 2021 - 2022');
        $designergraphique->save();
        return $designergraphique;
    }

    public function deleteDg($id)
    {
        $delete = DesignGraphique::where('id',$id)->delete();

        if($delete)
        {
            return ['result' => 'Operation réussie. Votre produit a bien été supprimé'];
        }
        else
        {
            return ['result' => 'Operation Echouer. Votre produit a bien été supprimé'];
        }
    }

    public function updDg($id)
    {
        $update = DesignGraphique::where('id',$id)->update();

        if($update)
        {
            return ['update' => 'Vous avez mis a jour votre apprenant'];
        }
        else
        {
            return ['update' => 'Mise a jour echouer!'];
        }
    }
}
