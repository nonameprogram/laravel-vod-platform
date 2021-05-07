<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    //

    public function index() {
        // $animes = Anime::where('name', 'Nanatsu no Taizai')->get()
        $animes = Anime::all();
        return view('anime.index', ['allAnimes' => $animes]);
    }

    public function haveSlug($slug) {
        $animes = Anime::where('name', $slug)->get();
        if(!$animes->isEmpty()) {
            return view('anime.index', ['allAnimes' => $animes]);
        }
        /* if ($animes == !null) {
            return view('anime.index', ['allAnimes' => $animes]);
        } */
    }

    public function search(Request $req) {
        return $this->haveSlug($req->input('searchAnime'));
        /* todo
            http://localhost:8000/search -> smth like http://localhost:8000/anime/Nanatsu-no-Taizai
            i zrobić lowercase w zapytaniu

            przenieść do nowej funkcji i zabezpieczyć [A-z][0-9]
        */
    }

    public function addAnime(Request $req) {
        $anime = new Anime;
        $anime->name = $req->input('Name');
        $anime->save();
        return redirect('anime.newanime');
    }


    /* TODO

        Formularz do dodawania anime
        Użytkownicy -> Baza danych, ciasteczka(app.layout), uprawnienia

    */

}
