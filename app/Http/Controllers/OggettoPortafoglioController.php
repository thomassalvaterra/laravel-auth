<?php

namespace App\Http\Controllers;

use App\Models\OggettoPortafoglio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OggettoPortafoglioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OggettoPortafoglio $oggettoPortafoglio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OggettoPortafoglio $oggettoPortafoglio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OggettoPortafoglio $oggettoPortafoglio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OggettoPortafoglio $oggettoPortafoglio)
    {
        //
    }
    public function validation($data)
    {
        $validated = Validator::make(
            $data,
            [
                "title" => "required|min:5|max:50",
                "description" => "",
                "thumb" => "",

            ],
            [
                'title.required' => 'Il titolo è necessario',
                'title.min' => 'Il titolo è troppo corto',
                'title.max' => 'Il titolo è troppo lungo',

            ]
        )->validate();

        return $validated;
    }
}
