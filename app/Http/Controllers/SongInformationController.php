<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongInformationController extends Controller
{
    public function index() {
        return view("songs", ['id' => null]);
    }

    public function specificSong($id) {
        return view("songs", ['id' => $id]);
    }
}
