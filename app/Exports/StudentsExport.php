<?php

namespace App\Exports;

use App\Student;
use App\Message;
use Maatwebsite\Excel\Concerns\FromCollection;

class StudentsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Message::select('name', 'email', 'subject', 'message')->get();
    }
}
