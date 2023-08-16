<?php

namespace App\Exports;

use App\Gallery;
use Maatwebsite\Excel\Concerns\FromCollection;

class GallerysExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Gallery::select('name', 'image', 'who')->get();
    }
}
