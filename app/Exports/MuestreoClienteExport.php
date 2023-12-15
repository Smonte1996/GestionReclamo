<?php

namespace App\Exports;

use App\Models\Muestreo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class MuestreoClienteExport implements FromView, ShouldAutoSize
{
    use Exportable;

    public $Muestreo;

   public function __construct($id)
  {
       $this->Muestreo = $id;
  }

  public function view(): View
  {
    return view('exports.ImformeExcel', [
     'muestreos' => Muestreo::find($this->Muestreo)
    ]);
  }
}
