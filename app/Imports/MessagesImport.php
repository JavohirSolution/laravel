<?php

namespace App\Imports;

use App\Gallery;
use Maatwebsite\Excel\Concerns\ToModel;

class MessagesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Gallery([
                'name' => $row[0],
                'image' => $row[1],
                'who' => $row[2],
                
        ]);
    }
}
