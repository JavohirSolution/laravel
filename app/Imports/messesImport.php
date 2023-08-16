<?php

namespace App\Imports;

use App\Message;
use Maatwebsite\Excel\Concerns\ToModel;

class messesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Message([
            'name'     => $row[0],
            'email'    => $row[1], 
            'subject'  => $row[2], 
            'message'  => $row[3], 
        ]);
    }
}
