<?php

namespace App\Http\Controllers\Admin;

use App\Models\Game;
use App\Http\Controllers\Controller;

use App\Http\Requests\GameRequest;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return view("admin.games.index", compact("games"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.games.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GameRequest $request)
    {
        $validati = $request->validated();

        $newPost = new Game();
        $newPost->fill($validati);
        $newPost->save();

        // return redirect()->route("admin.games.show", $newGame->id);
        return redirect()->route("admin.games.show");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $game = Game::find($id);
        return view("games.show", compact("game"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return view("admin.games.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GameRequest $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
