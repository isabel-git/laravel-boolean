<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function salutoTutti() {
        return view('holaTodo');
    }

    public function salutoNome() {
        
        return view('holaTu',
        [
            'name' => 'Tiberio' ,
        ]);
    }

    public function salutoNome2() {
        
        return view('holaTu',
        [
            'name' => 'Augusto' ,
        ]);
    }
}
