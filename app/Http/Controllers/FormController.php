<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('form');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validam datele de intrare si le atribuim
   
        $form = new Form();
        $form->nume = $request->input('nume');
        $form->prenume = $request->input('prenume');
        $form->data = $request->input('data');
        $form->comentariu = $request->input('comentariu');
        $form->save();
        return true;
    }
  
}
