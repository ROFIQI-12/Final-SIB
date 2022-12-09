<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DPembudidayaController extends Controller
{
    public function DPembudidaya()
    {
        return view('dataProduksi.dPembudidaya', [
            'tittle' => 'dPembudidaya'
        ]);
    }
}
