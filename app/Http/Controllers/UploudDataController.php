<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploudDataController extends Controller
{
    public function UploudData()
    {
        return view('Uploud.uploudData', [
            'tittle' => 'Uploud Data'
        ]);
    }
}
