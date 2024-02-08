<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller

// De rol van een controller is het bundelen van view functies ifv overzichtelijkheid.
// Strikt genomen zijn controllers dus overbodig.

{
    public function index(){
        return view('articles/articleIndex'); // Hier wordt het concrete bestandspad op de server (ergo file tree in VS Code) bepaald.
    }

    public function show($id) {
        return view('articles/articleShow', [
            'id' => $id
        ]);
    }
}
