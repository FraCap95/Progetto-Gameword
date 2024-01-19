<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Console;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        // $games = Game::all();
        $games = Game::orderBy('created_at', "DESC")->get();

        return view('article.index', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $consoles = Console::all();

        return view('article.create', compact('consoles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $game = Game::create([
            'title'=>$request->title,
            'category'=>$request->category,
            'description'=>$request->description,
            'price'=> $request->price,
            'img'=> $request->file('img')->store('public/games'),
            'user_id' => Auth::user()->id,
        ]);

        $game->consoles()->attach($request->consoles);

        return redirect(route('welcome'))->with('message', 'Il tuo gioco è stato caricato correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view('article.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game){
        $consoles = Console::all();
        return view ('article.edit', compact('game', 'consoles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $game->update([
            $game->title = $request->title,
            $game->category = $request->category,
            $game->description = $request->description,
            $game->price = $request->price,
        ]);
        if ($request->img) {
            $game->img=$request->file('img')->store('public/games');
            $game->save();
        }
        $game->consoles()->sync($request->consoles);

        return redirect(route('welcome'))->with('message', 'Il tuo gioco è stato modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game){
        $game->consoles()->detach();
        $game->delete();
        return redirect(route('welcome'))->with('message', 'Il tuo gioco è stato eliminato. Game over.');
    }
}
