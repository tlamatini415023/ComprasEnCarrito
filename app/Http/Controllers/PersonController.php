<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $person=Person::all();
        return view('dashboard.person.index',['person'=>$person]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $person=Person::all();
        return view('dashboard.person.create',['person'=>$person]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $person= new Person();   
        $person->Type=$request->input('Type');     
        $person->First_Name=$request->input('First_Name');
        $person->Last_Name=$request->input('Last_Name');
        $person->Document_Type=$request->input('Document_Type');
        $person->Document_Number=$request->input('Document_Number');
        $person->Email=$request->input('Email');
        $person->Phone=$request->input('Phone');
        $person->Address=$request->input('Address');
        $person->save();      
        return view("dashboard.person.message",['msg'=>"Persona agregada con exito"]);
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $person=Person::find($id);
        return view('dashboard.person.edit',['person'=>$person]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $person=Person::find($id);
        $person->Type=$request->input('Type');     
        $person->First_Name=$request->input('First_Name');
        $person->Last_Name=$request->input('Last_Name');
        $person->Document_Type=$request->input('Document_Type');
        $person->Document_Number=$request->input('Document_Number');
        $person->Email=$request->input('Email');
        $person->Phone=$request->input('Phone');
        $person->Address=$request->input('Address');
        $person->save();      
        return view("dashboard.person.message",['msg'=>"Persona actualizada con exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $person=Person::find($id);
        $person->delete();
        return redirect("dashboard/person");
    }
}
