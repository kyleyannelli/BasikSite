<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedalInformationController extends Controller
{
    public function index() {
        return view("pedals", ["pedalId" => null]);
    }

    public function specificPedal($id) {
        return view("pedals", ["pedalId" => $id]);
    }
}
