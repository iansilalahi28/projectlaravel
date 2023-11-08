<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function lulusanksi() {
        return view('low.lulusanksi');
    }
    public function dosen() {
        return view('low.dosen');
    }
    public function beritaksi() {
        return view('low.beritaksi');
    }
    public function inputberita() {
        return view('input.inputberita');
    }
    public function inputdosen() {
        return view('input.inputdosen');
    }
}
