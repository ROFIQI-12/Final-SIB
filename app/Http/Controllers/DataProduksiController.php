<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataProduksiController extends Controller
{
        //
        public function dataProduksi()
        {
            return view('dataProduksi.dataProduksi', [
                'tittle' => 'dataProduksi'
            ]);
        }
}
