<?php

namespace App\Exports;

use App\Anggota;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AnggotaExport implements FromView, ShouldAutoSize
{

    // public function collection()
    // {
    //     return Anggota::all();
    // }
    use Exportable;
    public function view(): View
    {
        return view('anggota',[
            'anggota' => Anggota::all()
        ]);
    }
}
