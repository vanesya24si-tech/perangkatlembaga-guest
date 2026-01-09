<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class SicController extends Controller
{
    public function handle($value)
    {
        // Jika 4 digit → anggap tahun lahir
        if (strlen($value) === 4) {
            $usia = Carbon::now()->year - $value;

            if ($usia >= 17) {
                return view('sic.index', [
                    'type' => 'dashboard',
                    'usia' => $usia
                ]);
            }

            return view('sic.index', [
                'type' => 'underage',
                'usia' => $usia
            ]);
        }

        // Selain itu → genap / ganjil
        return view('sic.index', [
            'type'  => 'number',
            'angka' => $value,
            'hasil' => $value % 2 === 0 ? 'Genap' : 'Ganjil'
        ]);
    }
}
