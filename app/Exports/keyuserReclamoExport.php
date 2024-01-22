<?php

namespace App\Exports;

use App\Models\Solicitude;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class keyuserReclamoExport implements FromView, ShouldAutoSize
{
    use Exportable;
    public $Reclamo;

    public function __construct($id)
    {
        $this->Reclamo = $id;
    }

    public function view(): View
    {
     return view('exports.keyuserReclamoExcel', [
      'reclamo' => Solicitude::whereIn('estado', $this->Reclamo)->get()
     ]);
 
    }
}
