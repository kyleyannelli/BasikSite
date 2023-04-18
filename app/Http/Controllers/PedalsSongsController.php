<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedalsSongsController extends Controller
{
    public function specificPedal($id) {
        return view("pedals-songs", ["pedalId" => $id]);
    }
}
